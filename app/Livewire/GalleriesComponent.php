<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Galleries;

class GalleriesComponent extends Component
{
use WithPagination;

    public $selectedType = 'all';
    public $searchTerm = '';
    public $showFeaturedOnly = false;
    public $selectedImage = null;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function updatingSelectedType()
    {
        $this->resetPage();
    }

    public function updatingShowFeaturedOnly()
    {
        $this->resetPage();
    }

    public function filterByType($type)
    {
        $this->selectedType = $type;
        $this->resetPage();
    }

    public function showImage($id)
    {
        $this->selectedImage = Galleries::find($id);
        $this->dispatch('show-modal');
    }

    public function closeModal()
    {
        $this->selectedImage = null;
    }

    public function render()
    {
        $query = Galleries::query()->public();

        // Filter by search term
        if ($this->searchTerm) {
            $query->where(function($q) {
                $q->where('title', 'like', '%' . $this->searchTerm . '%')
                  ->orWhere('description', 'like', '%' . $this->searchTerm . '%');
            });
        }

        // Filter by type
        if ($this->selectedType !== 'all') {
            $query->byType($this->selectedType);
        }

        // Filter featured only
        if ($this->showFeaturedOnly) {
            $query->featured();
        }

        $galleries = $query->latest('taken_date')
                          ->latest('created_at')
                          ->paginate(12);

        $featuredGalleries = Galleries::public()
                                    ->featured()
                                    ->latest('taken_date')
                                    ->take(6)
                                    ->get();

        return view('livewire.galleries-component', [
            'galleries' => $galleries,
            'featuredGalleries' => $featuredGalleries
        ]);
    }
}
