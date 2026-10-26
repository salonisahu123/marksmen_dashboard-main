@extends('frontend.layout.main')

@section('title', 'Gallery - Marksmen Group')

@section('content')
  <!-- SUBPAGE HERO (Full-Bleed Angled Cut Banner) -->
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-content reveal">
        <span class="page-hero-tag"><i class="fa-solid fa-camera-retro"></i> Project Visuals</span>
        <h1 class="page-hero-title">Media & Project <span>Gallery</span></h1>
        <p class="page-hero-desc">
          Explore live site operations, heavy mining equipment deployments, client machinery delivery handovers, and our modern workshop facilities across Madhya Pradesh.
        </p>
        <div class="page-hero-stats-row">
          <span class="hero-stat-pill"><i class="fa-solid fa-images"></i> 40+ Project Captures</span>
          <span class="hero-stat-pill"><i class="fa-solid fa-building-circle-check"></i> Workshop Hubs</span>
          <span class="hero-stat-pill"><i class="fa-solid fa-handshake"></i> Client Deliveries</span>
        </div>
      </div>
    </div>

    <!-- Right Side Full-Bleed Angled Media -->
    <div class="page-hero-media reveal">
      <img src="{{ asset('frontend/assets/images/IMG24.jpeg') }}" alt="Marksmen Mining Excavator Operation">
      <div class="page-hero-badge-overlay">
        <i class="fa-solid fa-photo-film"></i> Operational Field Media
      </div>
    </div>
  </section>

  <!-- FILTERABLE GALLERY SECTION -->
  <section class="section-padding" style="background-color: white;">
    <div class="container">
      <div class="gallery-filter-bar reveal">
        <button class="filter-btn active" data-filter="all">All Photos</button>
        @if(isset($categories) && $categories->count() > 0)
          @foreach($categories as $category)
            <button class="filter-btn" data-filter="{{ Str::slug($category->name) }}">{{ $category->name }}</button>
          @endforeach
        @endif
      </div>

      <div class="gallery-grid">
        @if(isset($data) && $data->count() > 0)
          @foreach($data as $item)
            @php
              $catSlug = $item->category ? Str::slug($item->category->name) : 'uncategorized';
            @endphp
            <div class="gallery-item reveal" data-category="{{ $catSlug }}">
              <img src="{{ asset('uploads/' . $item->media_path) }}" alt="{{ $item->title }}">
              <div class="gallery-item-hover">
                <div class="gallery-hover-icon"><i class="fa-solid fa-expand"></i></div>
                <h4>{{ $item->title }}</h4>
                <p>{{ $item->description }}</p>
              </div>
            </div>
          @endforeach
        @else
          <div style="text-align: center; width: 100%; grid-column: 1/-1; padding: 40px; background: #fff; border-radius: 12px;">
            <i class="fa-solid fa-images" style="font-size: 3rem; color: #ccc; margin-bottom: 1rem;"></i>
            <h4>No Images Found</h4>
            <p>Please check back later as we update our gallery.</p>
          </div>
        @endif
      </div>
    </div>
  </section>

  <!-- LIGHTBOX POPUP -->
  <div class="lightbox" id="lightbox">
    <div class="lightbox-content">
      <div class="lightbox-close">&times;</div>
      <img src="" alt="Popup Image" class="lightbox-img">
      <div class="lightbox-caption"></div>
    </div>
  </div>
@endsection