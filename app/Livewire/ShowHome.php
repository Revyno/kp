<?php

namespace App\Livewire;

use App\Models\Service;
use App\Models\FAQ as ModelsFAQ;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {   
        $services = Service::orderBy('title','ASC')->get();
        $faqs = ModelsFAQ::where('status',1)->get();
        return view('livewire.show-home', [
            'services' => $services,
            'faqs' => $faqs,
        ]);

    }
}
