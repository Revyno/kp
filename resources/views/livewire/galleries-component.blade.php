{{-- resources/views/livewire/galleries-component.blade.php --}}
<div class="container-fluid py-5">
    {{-- Featured Section --}}
    @if($featuredGalleries->count() > 0 && $selectedType === 'all' && !$searchTerm)
    <section class="page-header bg-tertiary">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">Gallery</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a href="{{route('Home')}}">Home</a>
                        </li>
                        <li class="list-inline-item">/ &nbsp; <a href="{{route('galleries')}}">Gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach($featuredGalleries as $featured)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 gallery-card">
                    <div class="position-relative overflow-hidden">
                        @if($featured->type === 'photo')
                            <img src="{{ Storage::url($featured->file_path) }}" 
                                 class="card-img-top gallery-image" 
                                 alt="{{ $featured->title }}"
                                 style="height: 250px; object-fit: cover; cursor: pointer;"
                                 wire:click="showImage({{ $featured->id }})">
                        @else
                            <div class="position-relative">
                                <img src="{{ $featured->thumbnail_path ? Storage::url($featured->thumbnail_path) : 'https://via.placeholder.com/400x250?text=Video' }}" 
                                     class="card-img-top" 
                                     alt="{{ $featured->title }}"
                                     style="height: 250px; object-fit: cover;">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play-circle text-white" style="font-size: 3rem; opacity: 0.8;"></i>
                                </div>
                            </div>
                        @endif
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-warning text-dark">
                                <i class="fas fa-star me-1"></i>Featured
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $featured->title }}</h5>
                        <p class="card-text text-muted small">{{ Str::limit($featured->description, 100) }}</p>
                        @if($featured->taken_date)
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                {{ $featured->taken_date->format('M d, Y') }}
                            </small>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- Main Gallery Section --}}
    <section>
        <div class="row mb-2">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold text-primary mb-3">
                    <i class="fas fa-images me-2"></i>
                    Our Gallery
                </h2>
                <p class="lead text-muted">Explore our collection of photos and videos</p>
            </div>
        </div>

        {{-- Filters --}}
        <div class="row mb-4">
            <div class="col-lg-8 col-md-7 mb-3">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" 
                           class="form-control" 
                           placeholder="Search galleries..." 
                           wire:model.live="searchTerm">
                </div>
            </div>
            <div class="col-lg-4 col-md-5 mb-3">
                <div class="d-flex gap-2 flex-wrap">
                    <button type="button" 
                            class="btn {{ $selectedType === 'all' ? 'btn-primary' : 'btn-outline-primary' }}"
                            wire:click="filterByType('all')">
                        <i class="fas fa-th me-1"></i>All
                    </button>
                    <button type="button" 
                            class="btn {{ $selectedType === 'photo' ? 'btn-primary' : 'btn-outline-primary' }}"
                            wire:click="filterByType('photo')">
                        <i class="fas fa-image me-1"></i>Photos
                    </button>
                    <button type="button" 
                            class="btn {{ $selectedType === 'video' ? 'btn-primary' : 'btn-outline-primary' }}"
                            wire:click="filterByType('video')">
                        <i class="fas fa-video me-1"></i>Videos
                    </button>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" 
                           type="checkbox" 
                           wire:model.live="showFeaturedOnly" 
                           id="featuredOnly">
                    <label class="form-check-label" for="featuredOnly">
                        <i class="fas fa-star text-warning me-1"></i>
                        Show Featured Only
                    </label>
                </div>
            </div>
        </div>

        {{-- Loading State --}}
        <div wire:loading class="text-center py-4">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        {{-- Gallery Grid --}}
        <div wire:loading.remove>
            @if($galleries->count() > 0)
                <div class="row g-4">
                    @foreach($galleries as $gallery)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card h-100 shadow-sm border-0 gallery-card">
                            <div class="position-relative overflow-hidden">
                                @if($gallery->type === 'photo')
                                    <img src="{{ Storage::url($gallery->file_path) }}" 
                                         class="card-img-top gallery-image" 
                                         alt="{{ $gallery->title }}"
                                         style="height: 200px; object-fit: cover; cursor: pointer;"
                                         wire:click="showImage({{ $gallery->id }})">
                                @else
                                    <div class="position-relative">
                                        <img src="{{ $gallery->thumbnail_path ? Storage::url($gallery->thumbnail_path) : 'https://via.placeholder.com/300x200?text=Video' }}" 
                                             class="card-img-top" 
                                             alt="{{ $gallery->title }}"
                                             style="height: 200px; object-fit: cover;">
                                        <div class="position-absolute top-50 start-50 translate-middle">
                                            <i class="fas fa-play-circle text-white" style="font-size: 2.5rem; opacity: 0.8;"></i>
                                        </div>
                                        <div class="position-absolute bottom-0 start-0 end-0 bg-dark bg-opacity-50 text-white p-2">
                                            <small><i class="fas fa-video me-1"></i>Video</small>
                                        </div>
                                    </div>
                                @endif
                                
                                @if($gallery->is_featured)
                                <div class="position-absolute top-0 end-0 m-2">
                                    <span class="badge bg-warning text-dark">
                                        <i class="fas fa-star"></i>
                                    </span>
                                </div>
                                @endif
                            </div>
                            
                            <div class="card-body">
                                <h6 class="card-title">{{ $gallery->title }}</h6>
                                @if($gallery->description)
                                    <p class="card-text text-muted small">{{ Str::limit($gallery->description, 60) }}</p>
                                @endif
                                
                                <div class="d-flex justify-content-between align-items-center">
                                    @if($gallery->taken_date)
                                        <small class="text-muted">
                                            <i class="fas fa-calendar me-1"></i>
                                            {{ $gallery->taken_date->format('M Y') }}
                                        </small>
                                    @endif
                                    
                                    @if($gallery->tags && count($gallery->tags) > 0)
                                        <div class="d-flex gap-1">
                                            @foreach(array_slice($gallery->tags, 0, 2) as $tag)
                                                <span class="badge bg-secondary">{{ $tag }}</span>
                                            @endforeach
                                            @if(count($gallery->tags) > 2)
                                                <span class="badge bg-light text-dark">+{{ count($gallery->tags) - 2 }}</span>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="row mt-4">
                    <div class="col-12">
                        {{ $galleries->links() }}
                    </div>
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-images text-muted" style="font-size: 4rem;"></i>
                    <h4 class="mt-3 text-muted">No galleries found</h4>
                    <p class="text-muted">Try adjusting your search or filter criteria</p>
                </div>
            @endif
        </div>
    </section>

    {{-- Image Modal --}}
    @if($selectedImage)
    <div class="modal fade show" 
         style="display: block; background-color: rgba(0,0,0,0.8);" 
         tabindex="-1" 
         wire:click="closeModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" wire:click.stop>
                <div class="modal-header">
                    <h5 class="modal-title">{{ $selectedImage->title }}</h5>
                    <button type="button" class="btn-close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body text-center">
                    @if($selectedImage->type === 'photo')
                        <img src="{{ Storage::url($selectedImage->file_path) }}" 
                             class="img-fluid rounded" 
                             alt="{{ $selectedImage->title }}"
                             style="max-height: 70vh;">
                    @else
                        <video controls class="w-100" style="max-height: 70vh;">
                            <source src="{{ Storage::url($selectedImage->file_path) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                    
                    @if($selectedImage->description)
                        <p class="mt-3 text-muted">{{ $selectedImage->description }}</p>
                    @endif
                    
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        @if($selectedImage->taken_date)
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>
                                {{ $selectedImage->taken_date->format('F d, Y') }}
                            </small>
                        @endif
                        
                        @if($selectedImage->tags && count($selectedImage->tags) > 0)
                            <div class="d-flex gap-1 flex-wrap">
                                @foreach($selectedImage->tags as $tag)
                                    <span class="badge bg-primary">{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@push('styles')
<style>
.gallery-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}

.gallery-image {
    transition: transform 0.3s ease;
}

.gallery-image:hover {
    transform: scale(1.05);
}

.badge {
    font-size: 0.7rem;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('livewire:init', () => {
    Livewire.on('show-modal', () => {
        // Add any additional modal functionality here
    });
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        @this.closeModal();
    }
});
</script>
@endpush