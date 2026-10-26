@extends('frontend.layout.main')

@section('title', 'Tata Hitachi Products - Marksmen Group')

@push('styles')
  <style>
    /* PREMIUM TATA HITACHI DESIGN SYSTEM */
    :root {
      --th-orange: #F15A24;
      --th-orange-dark: #d14a1a;
      --th-dark: #0F172A;
      --th-gray-bg: #F8FAFC;
      --th-gray-border: #E2E8F0;
      --th-text: #475569;
    }
    
    body {
      font-family: 'Inter', sans-serif;
    }

    /* 1. HERO BANNER */
    .th-hero {
      position: relative;
      width: 100%;
      height: 50vh;
      min-height: 350px;
      background: url('{{ asset('frontend/assets/images/tata_hitachi_banner.jpg') }}') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 0;
      border-bottom: 4px solid var(--th-orange);
    }

    /* Base Section Spacing - balanced for premium look */
    .th-section {
      padding: 10px 0;
      background: #ffffff;
    }
    
    .th-section .container {
      max-width: 100%;
      padding: 0 50px !important;
      margin: 0 auto;
    }
    
    .th-section.bg-gray {
      background: var(--th-gray-bg);
    }

    /* 2. INTERACTIVE TABS & SIDEBAR */
    .th-layout {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 40px;
    }
    
    .th-tab-content-container {
      min-width: 0;
    }

    .th-sidebar {
      background: transparent;
      padding: 0;
      align-self: start;
      position: sticky;
      top: 100px;
    }

    .th-sidebar-menu {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .th-sidebar-menu li {
      margin-bottom: 0;
      border-bottom: 1px solid #ffe5db;
    }

    .th-sidebar-menu li a {
      display: flex;
      align-items: center;
      gap: 15px;
      padding: 15px 10px;
      color: #000;
      font-weight: 600;
      font-size: 0.85rem;
      transition: all 0.3s ease;
      text-decoration: none;
      text-transform: uppercase;
    }

    .th-sidebar-menu li.active a .menu-icon,
    .th-sidebar-menu li a:hover .menu-icon {
      opacity: 1;
      filter: grayscale(0%);
    }

    /* Machine Icons */
    .th-sidebar-menu li a img.menu-icon {
      width: 70px;
      height: 50px;
      object-fit: contain;
      margin-right: 8px;
      opacity: 0.6;
      filter: grayscale(100%);
      transition: all 0.3s ease;
      vertical-align: middle;
    }

    .th-sidebar-menu li a:hover {
      color: var(--th-orange);
    }

    .th-sidebar-menu li.active a {
      color: var(--th-orange);
    }

    /* Tab Panes */
    .th-tab-pane {
      display: none;
      animation: fadeInUp 0.5s ease forwards;
    }
    
    .th-tab-pane.active {
      display: block;
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .th-section-title {
      font-size: 2.2rem;
      font-weight: 400;
      color: var(--th-orange);
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .th-section-desc {
      color: #333;
      font-size: 0.95rem;
      margin-bottom: 40px;
      line-height: 1.6;
      text-align: center;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
    }

    /* 3. PRODUCT GRID (EXACT MATCH & SLIDER) */
    .th-product-grid {
      display: flex;
      gap: 20px;
      overflow-x: auto;
      scroll-behavior: smooth;
      scroll-snap-type: x mandatory;
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
      align-items: flex-start;
    }
    
    .th-product-grid::-webkit-scrollbar {
      display: none;
    }

    .th-product-card {
      flex: 0 0 calc(33.3333% - 13.34px);
      max-width: calc(33.3333% - 13.34px);
      scroll-snap-align: start;
      background: transparent;
      padding: 0;
      border: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .th-product-img-wrap {
      height: 220px;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: transparent;
      margin-bottom: 15px;
      padding: 0;
    }

    .th-product-img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
      padding: 15px;
      transition: transform 0.4s ease;
    }

    .th-product-card:hover .th-product-img {
      transform: scale(1.05);
    }

    .th-product-title {
      color: var(--th-orange);
      font-weight: 600;
      font-size: 1.1rem;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .th-product-desc {
      font-size: 0.85rem;
      color: #333;
      margin-bottom: 5px;
      line-height: 1.5;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
      transition: all 0.3s ease;
    }

    .th-product-desc.expanded {
      -webkit-line-clamp: unset;
      display: block;
    }

    .th-read-more-btn {
      background: none;
      border: none;
      color: var(--th-orange);
      font-size: 0.8rem;
      font-weight: 600;
      cursor: pointer;
      padding: 0;
      margin-bottom: 20px;
      text-decoration: underline;
    }

    .th-read-more-btn:hover {
      color: var(--th-orange-dark);
    }

    .th-btn-orange {
      display: inline-block;
      text-align: center;
      background: var(--th-orange);
      color: #ffffff;
      padding: 10px 25px;
      font-weight: 600;
      border-radius: 4px;
      font-size: 0.85rem;
      text-decoration: none;
      transition: all 0.3s ease;
      text-transform: uppercase;
    }

    .th-btn-orange:hover {
      background: var(--th-orange-dark);
      color: #ffffff;
    }

    /* Slider Controls */
    .th-slider-controls {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 40px;
      padding: 0 10px;
    }
    
    .th-slider-dots-left {
      display: flex;
      gap: 10px;
    }
    
    .th-dot-left {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #e2e8f0;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    
    .th-dot-left.active {
      background: var(--th-orange);
    }
    
    .th-slider-arrows {
      display: flex;
      gap: 20px;
    }
    
    .th-slider-arrows i {
      font-size: 1.2rem;
      color: #64748b;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    
    .th-slider-arrows i:hover {
      color: var(--th-dark);
    }

    /* 4. THREE COLUMNS SECTION (Solutions, Spares, Services) */
    .th-3col {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    .th-3col-card {
      background: transparent;
      transition: all 0.4s ease;
      position: relative;
      text-align: center;
    }

    .th-3col-card:hover {
      transform: translateY(-5px);
    }

    .th-3col-header {
      color: var(--th-orange);
      font-size: 1.8rem;
      font-weight: 500;
      text-transform: uppercase;
      margin-bottom: 15px;
      text-align: center;
    }

    .th-3col-img-wrap {
      height: 250px;
      overflow: hidden;
      position: relative;
      background: #fff;
      clip-path: polygon(5% 0, 100% 0, 95% 100%, 0% 100%);
      margin-bottom: 20px;
    }

    .th-3col-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }
    
    .th-3col-img-wrap.contain-img img {
      object-fit: contain;
      padding: 0;
    }

    .th-3col-card:hover .th-3col-img-wrap img {
      transform: scale(1.08);
    }

    .th-3col-content {
      padding: 0 10px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .th-3col-title {
      color: var(--th-orange);
      font-weight: 700;
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .th-3col-desc {
      color: #333;
      font-size: 0.9rem;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    /* 5. MODERN TIMELINE */
    .th-timeline-section {
      background: linear-gradient(135deg, #1E293B 0%, #0F172A 100%);
      color: #fff;
      position: relative;
      overflow: hidden;
    }

    .th-timeline-title {
      font-size: 2.5rem;
      font-weight: 900;
      color: #ffffff;
      margin-bottom: 40px;
      text-align: center;
    }

    .th-timeline-title span {
      color: var(--th-orange);
    }

    .th-timeline-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      position: relative;
      z-index: 2;
    }

    .th-timeline-item {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 16px;
      padding: 30px;
      backdrop-filter: blur(10px);
      transition: all 0.3s ease;
      text-align: center;
    }

    .th-timeline-item:hover {
      transform: translateY(-10px);
      background: rgba(255,255,255,0.08);
      border-color: var(--th-orange);
    }

    .th-timeline-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, var(--th-orange) 0%, #E85B25 100%);
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      box-shadow: 0 10px 20px rgba(241, 90, 36, 0.4);
    }

    .th-timeline-icon i {
      font-size: 1.8rem;
      color: #ffffff;
    }

    /* 6. PROPER AUTO SLIDER FOR TESTIMONIALS */
    .th-testimonial-container {
      width: 100%;
      overflow: hidden;
      position: relative;
      padding: 20px 0;
    }

    .th-testimonial-track {
      display: flex;
      gap: 30px;
      transition: transform 0.5s ease-in-out;
    }

    .th-testimonial-card {
      min-width: calc(50% - 15px); /* Show 2 cards at once on desktop */
      background: #ffffff;
      border-radius: 16px;
      padding: 30px;
      display: flex;
      gap: 25px;
      align-items: center;
      border: 1px solid var(--th-gray-border);
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .th-testimonial-video {
      position: relative;
      width: 180px;
      height: 180px;
      flex-shrink: 0;
      border-radius: 50%;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      border: 4px solid var(--th-gray-bg);
    }

    .th-testimonial-video img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .th-play-btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50px;
      height: 50px;
      background: var(--th-orange);
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 15px rgba(241,90,36,0.4);
    }

    .th-testimonial-content {
      flex-grow: 1;
    }

    .th-quote-icon {
      font-size: 2rem;
      color: #CBD5E1;
      margin-bottom: 15px;
    }

    .th-testimonial-text {
      font-size: 1rem;
      color: var(--th-text);
      line-height: 1.7;
      font-style: italic;
    }

    .th-slider-dots {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 30px;
    }

    .th-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #CBD5E1;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .th-dot.active {
      background: var(--th-orange);
      transform: scale(1.2);
    }

    @media (max-width: 991px) {
      .th-layout { grid-template-columns: 1fr; }
      .th-sidebar { position: static; }
      .th-3col { grid-template-columns: 1fr; }
      .th-timeline-grid { grid-template-columns: 1fr; }
      .th-testimonial-card { min-width: 100%; flex-direction: column; text-align: center; }
      .th-testimonial-video { width: 150px; height: 150px; }
      .th-product-grid { grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); }
    }
  </style>
@endpush

@section('content')
  <!-- CLEAN HERO BANNER (Properly Scaled) -->
  <section class="th-hero"></section>

  <!-- INTERACTIVE TABS PRODUCTS SECTION -->

  <!-- TATA HITACHI BUSINESS SECTION (From Brief) -->
  <section class="section-padding" style="background-color: var(--bg-light);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">About Tata Hitachi</span>
        <h2 class="section-title">Tata Hitachi <span>Dealership</span></h2>
        <p class="section-subtitle">Marksmen Group is an authorized Tata Hitachi dealership serving customers across Madhya Pradesh with construction equipment, professional service support and genuine spare parts.</p>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-truck-monster" style="color: var(--accent); margin-right: 8px;"></i> Product Categories</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Hydraulic Excavators</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Mini Excavators</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Backhoe Loaders</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Wheel Loaders</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Mining Equipment</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Other earthmoving equipment</li>
          </ul>
        </div>
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-city" style="color: var(--accent); margin-right: 8px;"></i> Applications</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Mining & Quarrying</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Road & Building construction</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Infrastructure & Earthmoving</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Irrigation & Material handling</li>
          </ul>
        </div>

        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-screwdriver-wrench" style="color: var(--accent); margin-right: 8px;"></i> Our Services</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> New machine sales & commissioning</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Preventive maintenance</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Repairs and diagnostics</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Genuine spare parts & Technical support</li>
          </ul>
        </div>

      </div>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 3rem;">
         <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center;">
            <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">Our Strength</h3>
            <p style="font-size: 1rem; color: #555;">Experienced sales team, dedicated service support, workshop infrastructure, genuine parts availability, strong regional presence, customer-focused after-sales support.</p>
         </div>
         <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); text-align: center;">
            <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">Territory</h3>
            <p style="font-size: 1rem; color: #555;">Serving customers across key markets of Madhya Pradesh, including: <strong>Bhopal | Gwalior | Sagar | Betul | Chhindwara</strong> and surrounding districts.</p>
         </div>
      </div>

      <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
        <a href="{{ url('/services') }}" class="btn btn-primary">Explore Tata Hitachi Machines <i class="fa-solid fa-arrow-right"></i></a>
        <a href="{{ url('/contact?product=Tata+Hitachi+Heavy+Machinery') }}" class="btn btn-secondary btn-enquire" data-product-name="Tata Hitachi Heavy Machinery">Request a Quote</a>
        <a href="{{ url('/contact?product=Tata+Hitachi+Equipment+Service') }}" class="btn btn-outline btn-enquire" data-product-name="Tata Hitachi Equipment Service">Book Service</a>
      </div>
    </div>
  </section>



  <section class="th-section bg-gray" style="background: #ffffff;">
    <div class="container th-layout">
      <!-- Sidebar Menu -->
      <aside class="th-sidebar">
        <ul class="th-sidebar-menu" id="th-tabs-nav">
          @foreach($categories ?? [] as $index => $category)
            @php
              // Map slug to a fallback icon if image is not present
              $fallbackIcon = '';
              if(str_contains($category->slug, 'mini')) $fallbackIcon = 'mini-excavator-icon.png';
              elseif(str_contains($category->slug, 'const')) $fallbackIcon = 'const-excavator-icon.png';
              elseif(str_contains($category->slug, 'mining')) $fallbackIcon = 'mining-excavator-icon.png';
              elseif(str_contains($category->slug, 'backhoe')) $fallbackIcon = 'backhoe-icon.png';
              elseif(str_contains($category->slug, 'wheel')) $fallbackIcon = 'wheel-loader-icon.png';
              elseif(str_contains($category->slug, 'dump')) $fallbackIcon = 'dump-truck-icon.png';
              elseif(str_contains($category->slug, 'attach')) $fallbackIcon = 'attachment-icon.png';
              elseif(str_contains($category->slug, 'used')) $fallbackIcon = 'used-eq-icon.png';
              elseif(str_contains($category->slug, 'custom')) $fallbackIcon = 'custom-mach-icon.png';
              else $fallbackIcon = 'const-excavator-icon.png';
            @endphp
            <li class="{{ $index === 0 ? 'active' : '' }}" data-target="tab-{{ $category->slug }}">
              <a href="javascript:void(0)">
                <img src="{{ $category->image ? asset('uploads/'.$category->image) : asset('frontend/assets/images/'.$fallbackIcon) }}" onerror="this.src='https://www.tatahitachi.co.in/wp-content/uploads/2021/04/ZAXIS140H.jpg'" class="menu-icon" alt="icon"> 
                {{ strtoupper($category->name) }}
              </a>
            </li>
          @endforeach
        </ul>
      </aside>
      
      <!-- Tab Panes Container -->
      <div class="th-tab-content-container">
        
        @foreach($categories ?? [] as $index => $category)
        <div class="th-tab-pane {{ $index === 0 ? 'active' : '' }}" id="tab-{{ $category->slug }}">
          <h2 class="th-section-title">{{ strtoupper($category->name) }}</h2>
          <p class="th-section-desc">{{ $category->description ?? 'Explore our wide range of ' . strtolower($category->name) . ' designed to offer solutions specially tailored for Indian conditions and meets all local regulations.' }}</p>
          
          <div class="th-product-grid">
            @php
              $categoryProducts = collect($products ?? [])->where('category.slug', $category->slug);
            @endphp
            
            @forelse($categoryProducts as $product)
            <div class="th-product-card">
              <div class="th-product-img-wrap">
                <img src="{{ $product->image ? asset('uploads/' . $product->image) : asset('frontend/assets/images/img7.jpeg') }}" alt="{{ $product->name }}" class="th-product-img">
              </div>
              <h3 class="th-product-title">{{ $product->name }}</h3>
              <p class="th-product-desc" id="desc-{{ $product->id }}">{{ $product->description ?? 'High power, high fuel efficiency, and high productivity machine.' }}</p>
              <button class="th-read-more-btn" onclick="toggleDesc('desc-{{ $product->id }}', this)">Read More</button>
              <button type="button" class="btn-product-enquire th-btn-orange" data-product-name="Tata Hitachi - {{ $product->name }}" style="border: none; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 9px 20px; font-size: 0.85rem; font-weight: 700; border-radius: 4px; margin-top: 6px; box-shadow: 0 2px 6px rgba(241, 90, 34, 0.25);">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>
            @empty
            <div class="th-product-card">
              <div class="th-product-img-wrap">
                <img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/01/tmx-20.jpg" onerror="this.src='{{ asset('frontend/assets/images/img7.jpeg') }}'" alt="Placeholder" class="th-product-img">
              </div>
              <h3 class="th-product-title">Coming Soon</h3>
              <p class="th-product-desc" id="desc-empty-{{ $index }}">Products for this category will be updated soon.</p>
              <button class="th-read-more-btn" onclick="toggleDesc('desc-empty-{{ $index }}', this)">Read More</button>
              <button type="button" class="btn-product-enquire th-btn-orange" data-product-name="Tata Hitachi - {{ $category->name }}" style="border: none; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; gap: 8px; padding: 9px 20px; font-size: 0.85rem; font-weight: 700; border-radius: 4px; margin-top: 6px; box-shadow: 0 2px 6px rgba(241, 90, 34, 0.25);">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>
            @endforelse
          </div>
          
          <div class="th-slider-controls">
            <div class="th-slider-dots-left">
              <span class="th-dot-left active"></span>
              <span class="th-dot-left"></span>
              <span class="th-dot-left"></span>
            </div>
            <div class="th-slider-arrows">
              <i class="fa-solid fa-chevron-left"></i>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
          </div>
        </div>
        @endforeach



      </div>
    </div>
  </section>

  <!-- 3 COLUMNS SECTION (Solutions, Spares, Services) -->
  <section class="th-section">
    <div class="container">
      <div class="th-3col">
        
        <!-- SOLUTIONS SLIDER -->
        <div class="th-3col-card" id="slider-solutions">
          <div class="th-3col-header">SOLUTIONS</div>
          
          <div class="th-slides-container">
            <div class="th-slide active" style="display:block;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2022/04/reman-center-thumb.jpg" alt="Solutions"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">RE-MAN CENTER</h3>
                <p class="th-3col-desc">Re-manufactured Hydraulic Aggregates & Engines of Zaxis series models.</p>
                </div>
            </div>
            <div class="th-slide" style="display:none;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/consite.jpg" alt="ConSite"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">CONSITE</h3>
                <p class="th-3col-desc">The smart remote machine management tool that links your machine to the construction site.</p>
                </div>
            </div>
            <div class="th-slide" style="display:none;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/mining.jpg" alt="Mining"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">MINING</h3>
                <p class="th-3col-desc">Tata Hitachi Construction Machinery (THCM) has been at the forefront of providing complete solutions to the Mining.</p>
                </div>
            </div>
            <div class="th-slide" style="display:none;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/infrastructure.jpg" alt="Infrastructure"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">INFRASTRUCTURE</h3>
                <p class="th-3col-desc">Tata Hitachi Construction Machinery (THCM) offers a variety of solutions for the infrastructure segment.</p>
                </div>
            </div>
          </div>

          <div class="th-slider-controls" style="padding: 20px 25px; border-top: none;">
            <div class="th-slider-dots-left">
              <span class="th-dot-left active" onclick="goToSlide('slider-solutions', 0)"></span>
              <span class="th-dot-left" onclick="goToSlide('slider-solutions', 1)"></span>
              <span class="th-dot-left" onclick="goToSlide('slider-solutions', 2)"></span>
              <span class="th-dot-left" onclick="goToSlide('slider-solutions', 3)"></span>
            </div>
            <div class="th-slider-arrows">
              <i class="fa-solid fa-chevron-left" onclick="changeSlide('slider-solutions', -1)"></i>
              <i class="fa-solid fa-chevron-right" onclick="changeSlide('slider-solutions', 1)"></i>
            </div>
          </div>
        </div>
        
        <!-- SPARES SLIDER -->
        <div class="th-3col-card" id="slider-spares">
          <div class="th-3col-header">SPARES</div>
          
          <div class="th-slides-container">
            <div class="th-slide active" style="display:block;">
              <div class="th-3col-img-wrap contain-img"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/lubricants.jpg" alt="Spares"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">LUBRICANTS</h3>
                <p class="th-3col-desc">Lubricants</p>
                </div>
            </div>
            <div class="th-slide" style="display:none;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/filters.jpg" alt="Filters"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">FILTERS</h3>
                <p class="th-3col-desc">Using Tata Hitachi genuine filters not only helps in keeping the machine clean, but also makes its engine and hydraulic...</p>
                </div>
            </div>
            <div class="th-slide" style="display:none;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/parts.jpg" alt="Parts Warehouses"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">PARTS WAREHOUSES</h3>
                <p class="th-3col-desc">Tata Hitachi offers a wide range of parts for the various machines it manufactures - both new and older models.</p>
                </div>
            </div>
          </div>

          <div class="th-slider-controls" style="padding: 20px 25px; border-top: none;">
            <div class="th-slider-dots-left">
              <span class="th-dot-left active" onclick="goToSlide('slider-spares', 0)"></span>
              <span class="th-dot-left" onclick="goToSlide('slider-spares', 1)"></span>
              <span class="th-dot-left" onclick="goToSlide('slider-spares', 2)"></span>
            </div>
            <div class="th-slider-arrows">
              <i class="fa-solid fa-chevron-left" onclick="changeSlide('slider-spares', -1)"></i>
              <i class="fa-solid fa-chevron-right" onclick="changeSlide('slider-spares', 1)"></i>
            </div>
          </div>
        </div>
        
        <!-- SERVICES SLIDER -->
        <div class="th-3col-card" id="slider-services">
          <div class="th-3col-header">SERVICES</div>
          
          <div class="th-slides-container">
            <div class="th-slide active" style="display:block;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/workshop.jpg" alt="Services"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">WORKSHOPS</h3>
                <p class="th-3col-desc">We support our customers with dedicated Engine, Hydraulic Workshop and Machine Care facilities across India.</p>
                </div>
            </div>
            <div class="th-slide" style="display:none;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/training.jpg" alt="Technical Training"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">TECHNICAL TRAINING</h3>
                <p class="th-3col-desc">We conduct regular customer training programs for customer maintenance staff and engineers.</p>
                </div>
            </div>
            <div class="th-slide" style="display:none;">
              <div class="th-3col-img-wrap"><img src="https://www.tatahitachi.co.in/wp-content/uploads/2021/04/technical-support.jpg" alt="Technical Support"></div>
              <div class="th-3col-content" style="padding-bottom: 0;">
                <h3 class="th-3col-title">TECHNICAL SUPPORT</h3>
                <p class="th-3col-desc">We support customers across the complete life cycle of the equipment through an extensive network of Tata Hitachi.</p>
                </div>
            </div>
          </div>

          <div class="th-slider-controls" style="padding: 20px 25px; border-top: none;">
            <div class="th-slider-dots-left">
              <span class="th-dot-left active" onclick="goToSlide('slider-services', 0)"></span>
              <span class="th-dot-left" onclick="goToSlide('slider-services', 1)"></span>
              <span class="th-dot-left" onclick="goToSlide('slider-services', 2)"></span>
            </div>
            <div class="th-slider-arrows">
              <i class="fa-solid fa-chevron-left" onclick="changeSlide('slider-services', -1)"></i>
              <i class="fa-solid fa-chevron-right" onclick="changeSlide('slider-services', 1)"></i>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- INFINITE POTENTIAL SECTION -->
  <section class="th-infinite-potential" style="position: relative; background: url('{{ asset('frontend/assets/images/img24.jpeg') }}') no-repeat center/cover; padding: 60px 0 100px; margin-top: 30px; font-family: 'Inter', sans-serif;">
    <!-- Dark Overlay -->
    <div style="position: absolute; inset: 0; background: rgba(60, 45, 30, 0.85);"></div>
    
    <div class="container" style="position: relative; z-index: 2; padding: 0 50px;">
      
      <!-- Top Left Logo Placeholder -->
      <div style="position: absolute; top: -20px; left: 50px; border: 2px solid #fff; padding: 5px 15px; display: inline-flex; align-items: center; gap: 12px; background: transparent;">
        <i class="fa-solid fa-hard-hat" style="color: var(--th-orange); font-size: 2.2rem;"></i>
        <div style="color: #fff; font-weight: 800; font-size: 1rem; line-height: 1.1; letter-spacing: 1px;">
          CHALO<br>DESH<br>BANAYE
        </div>
      </div>

      <!-- Heading -->
      <h2 style="text-align: center; color: #fff; font-size: 2rem; font-weight: 500; text-transform: uppercase; margin-bottom: 80px; letter-spacing: 1px;">Infinite Potential</h2>

      <!-- The Wave Container -->
      <div class="th-wave-container" style="position: relative; width: 100%; max-width: 1200px; margin: 0 auto; height: 350px;">
        
        <!-- The SVG Line -->
        <svg width="100%" height="100%" viewBox="0 0 1000 350" preserveAspectRatio="none" style="position: absolute; top:0; left:0; pointer-events: none;">
          <path d="M 0 100 C 100 100, 150 280, 250 280 C 350 280, 400 70, 500 70 C 600 70, 650 280, 750 280 C 850 280, 900 100, 1000 100" stroke="#f15a22" stroke-width="4" fill="none" vector-effect="non-scaling-stroke" />
        </svg>

        <!-- Start Node -->
        <div class="wave-node" style="position: absolute; left: 0%; top: 100px; transform: translate(-50%, -50%);">
          <div style="width: 20px; height: 20px; background: #fff; border-radius: 50%;"></div>
        </div>

        <!-- Col 1 (Dip 1) -->
        <div class="wave-col" style="position: absolute; left: 25%; top: 280px; transform: translate(-50%, -50%); display: flex; flex-direction: column; align-items: center;">
          <div class="wave-text" style="position: absolute; bottom: 70px; width: 220px; text-align: center; color: #fff; font-size: 0.9rem; line-height: 1.6; font-weight: 500;">
            Tata Hitachi has been a trusted partner in India's growth story, ever since the increased emphasis on infrastructure and mining sectors.
          </div>
          <div class="wave-icon" style="width: 60px; height: 60px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 10px rgba(0,0,0,0.3);">
             <i class="fa-solid fa-truck-pickup" style="color: var(--th-orange); font-size: 1.5rem;"></i>
          </div>
        </div>

        <!-- Col 2 (Peak 1) -->
        <div class="wave-col" style="position: absolute; left: 50%; top: 70px; transform: translate(-50%, -50%); display: flex; flex-direction: column; align-items: center;">
          <div class="wave-icon" style="width: 70px; height: 70px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 10px rgba(0,0,0,0.3); z-index: 2;">
             <i class="fa-solid fa-truck-monster" style="color: var(--th-orange); font-size: 2rem;"></i>
          </div>
          <div class="wave-text" style="position: absolute; top: 90px; width: 300px; text-align: center; color: #fff; font-size: 0.95rem; line-height: 1.6; font-weight: 500;">
            Chalo Desh Banaye has<br>Tata Hitachi's clarion call to build<br>the nation.<br>
            "Aao Kartavya Nibhaye, Chalo<br>Desh Banaye"<br>
            is a celebration of pride, purpose<br>and personal commitment to<br>building the India of tomorrow.
          </div>
          </div>

        <!-- Col 3 (Dip 2) -->
        <div class="wave-col" style="position: absolute; left: 75%; top: 280px; transform: translate(-50%, -50%); display: flex; flex-direction: column; align-items: center;">
          <div class="wave-text" style="position: absolute; bottom: 70px; width: 220px; text-align: center; color: #fff; font-size: 0.9rem; line-height: 1.6; font-weight: 500;">
            We do this by providing our customers with best-in-class equipment and support solutions that are reliable and innovative.
          </div>
          <div class="wave-icon" style="width: 60px; height: 60px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 10px rgba(0,0,0,0.3);">
             <i class="fa-solid fa-truck-moving" style="color: var(--th-orange); font-size: 1.5rem;"></i>
          </div>
        </div>

        <!-- End Node -->
        <div class="wave-node" style="position: absolute; left: 100%; top: 100px; transform: translate(-50%, -50%);">
          <div style="width: 20px; height: 20px; background: #fff; border-radius: 50%;"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- PROPER AUTO SLIDING TESTIMONIALS -->
  <section class="th-section bg-gray">
    <div class="container">
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span style="color: var(--th-orange); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem;">Client Voices</span>
        <h2 style="font-size: 2.25rem; font-weight: 800; color: var(--th-dark); margin-top: 5px;">Our <span style="color: var(--th-orange);">Testimonials</span></h2>
      </div>
      
      <div class="th-testimonial-container">
        <div class="th-testimonial-track" id="testimonial-track">
          <!-- Slide 1 -->
          <div class="th-testimonial-card">
            <div class="th-testimonial-video">
              <img src="https://img.youtube.com/vi/ScMzIvxBSi4/hqdefault.jpg" alt="Video 1">
              <button class="th-play-btn"><i class="fa-solid fa-play"></i></button>
            </div>
            <div class="th-testimonial-content">
              <i class="fa-solid fa-quote-left th-quote-icon"></i>
              <p class="th-testimonial-text">"Mr. Rajendra Pawar highlights the excellent support provided by the Tata Hitachi dealer, noting that engineers are highly responsive and parts are always readily available."</p>
              <h4 style="margin-top: 15px; color: var(--th-dark); font-weight: 800;">Rajendra Pawar</h4>
              <p style="color: var(--th-orange); font-size: 0.85rem; font-weight: 600;">Infrastructure Developer</p>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="th-testimonial-card">
            <div class="th-testimonial-video">
              <img src="https://img.youtube.com/vi/ScMzIvxBSi4/hqdefault.jpg" alt="Video 2">
              <button class="th-play-btn"><i class="fa-solid fa-play"></i></button>
            </div>
            <div class="th-testimonial-content">
              <i class="fa-solid fa-quote-left th-quote-icon"></i>
              <p class="th-testimonial-text">"Mr. Yedubadu's testimonial reflects the brand's customer-first approach, emphasizing the extreme reliability of their equipment in real-world professional applications."</p>
              <h4 style="margin-top: 15px; color: var(--th-dark); font-weight: 800;">Yedubadu</h4>
              <p style="color: var(--th-orange); font-size: 0.85rem; font-weight: 600;">Site Contractor</p>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="th-testimonial-card">
            <div class="th-testimonial-video">
              <img src="https://img.youtube.com/vi/ScMzIvxBSi4/hqdefault.jpg" alt="Video 3">
              <button class="th-play-btn"><i class="fa-solid fa-play"></i></button>
            </div>
            <div class="th-testimonial-content">
              <i class="fa-solid fa-quote-left th-quote-icon"></i>
              <p class="th-testimonial-text">"Marksmen Group provides incredible service with immediate dispatch of OEM parts. It has vastly improved our construction turnaround times across major projects."</p>
              <h4 style="margin-top: 15px; color: var(--th-dark); font-weight: 800;">Sunil Verma</h4>
              <p style="color: var(--th-orange); font-size: 0.85rem; font-weight: 600;">Fleet Manager</p>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="th-testimonial-card">
            <div class="th-testimonial-video">
              <img src="https://img.youtube.com/vi/ScMzIvxBSi4/hqdefault.jpg" alt="Video 4">
              <button class="th-play-btn"><i class="fa-solid fa-play"></i></button>
            </div>
            <div class="th-testimonial-content">
              <i class="fa-solid fa-quote-left th-quote-icon"></i>
              <p class="th-testimonial-text">"Tata Hitachi excavators from Marksmen are robust and reliable. We rarely face downtime and the support team is always just a phone call away."</p>
              <h4 style="margin-top: 15px; color: var(--th-dark); font-weight: 800;">Amit Singh</h4>
              <p style="color: var(--th-orange); font-size: 0.85rem; font-weight: 600;">Mining Operator</p>
            </div>
          </div>
        </div>
        
        <!-- Slider Dots -->
        <div class="th-slider-dots" id="slider-dots">
          <div class="th-dot active"></div>
          <div class="th-dot"></div>
          <div class="th-dot"></div>
          <div class="th-dot"></div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <!-- INTERACTIVE SCRIPTS -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // 1. Sidebar Tabs Logic
      const tabs = document.querySelectorAll('#th-tabs-nav li');
      const panes = document.querySelectorAll('.th-tab-pane');
      
      tabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
          e.preventDefault();
          tabs.forEach(t => t.classList.remove('active'));
          this.classList.add('active');
          const target = this.getAttribute('data-target');
          panes.forEach(pane => pane.classList.remove('active'));
          const targetPane = document.getElementById(target);
          if(targetPane) targetPane.classList.add('active');
        });
      });

      // 2. Product Grid Slider Logic
      const productPanes = document.querySelectorAll('.th-tab-pane');
      productPanes.forEach(pane => {
        const grid = pane.querySelector('.th-product-grid');
        const dots = pane.querySelectorAll('.th-dot-left');
        const arrowLeft = pane.querySelector('.fa-chevron-left');
        const arrowRight = pane.querySelector('.fa-chevron-right');

        if (!grid) return;

        const getScrollAmount = () => {
          // Scroll by the full visible width of the grid (which is roughly 3 cards)
          return grid.clientWidth;
        };

        const updateDots = () => {
          if (!dots.length) return;
          const maxScroll = grid.scrollWidth - grid.clientWidth;
          if (maxScroll <= 0) return;
          const scrollPercentage = grid.scrollLeft / maxScroll;
          let activeIndex = Math.round(scrollPercentage * (dots.length - 1));
          if(isNaN(activeIndex)) activeIndex = 0;
          dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === activeIndex);
          });
        };

        grid.addEventListener('scroll', updateDots);

        if (arrowLeft && arrowRight) {
          arrowLeft.addEventListener('click', () => {
            grid.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
          });
          arrowRight.addEventListener('click', () => {
            grid.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
          });
        }

        dots.forEach((dot, index) => {
          dot.addEventListener('click', () => {
            const scrollPos = index * getScrollAmount();
            grid.scrollTo({ left: scrollPos, behavior: 'smooth' });
          });
        });
      });

      // 3. Auto-Sliding Testimonials Logic
      const track = document.getElementById('testimonial-track');
      const dots = document.querySelectorAll('.th-dot');
      if(track && dots.length > 0) {
        let currentIndex = 0;
        const totalCards = track.children.length; // 4
        
        function updateSlider(index) {
          const card = track.children[0];
          const cardWidth = card.offsetWidth;
          const gap = 30; // Matches CSS gap
          
          // Determine how many items are visible
          const visibleItems = window.innerWidth <= 991 ? 1 : 2;
          const maxIndex = totalCards - visibleItems;
          
          if (index > maxIndex) index = 0;
          if (index < 0) index = maxIndex;
          
          currentIndex = index;
          track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
          
          // Update dots (approximate mapping)
          dots.forEach(d => d.classList.remove('active'));
          if(dots[currentIndex]) {
            dots[currentIndex].classList.add('active');
          }
        }

        // Auto slide every 4 seconds
        setInterval(() => {
          updateSlider(currentIndex + 1);
        }, 4000);
        
        // Manual dot clicks
        dots.forEach((dot, index) => {
          dot.addEventListener('click', () => {
            updateSlider(index);
          });
        });
        
        // Handle window resize gracefully
        window.addEventListener('resize', () => updateSlider(currentIndex));
      }
    });

    // --- 3 COLUMNS SLIDER FUNCTIONALITY ---
    function showSlide(sliderId, index) {
      const slider = document.getElementById(sliderId);
      if (!slider) return;
      const slides = slider.querySelectorAll('.th-slide');
      const dots = slider.querySelectorAll('.th-dot-left');
      
      if (index >= slides.length) index = 0;
      if (index < 0) index = slides.length - 1;
      
      slider.dataset.currentIndex = index;
      
      slides.forEach((slide, i) => {
        slide.style.display = (i === index) ? 'block' : 'none';
      });
      
      dots.forEach((dot, i) => {
        if (i === index) dot.classList.add('active');
        else dot.classList.remove('active');
      });
    }

    function changeSlide(sliderId, dir) {
      const slider = document.getElementById(sliderId);
      let currentIndex = parseInt(slider.dataset.currentIndex || '0');
      showSlide(sliderId, currentIndex + dir);
    }

    function goToSlide(sliderId, index) {
      showSlide(sliderId, index);
    }
  </script>
  <script>
    function toggleDesc(id, btn) {
      // Collapse all other descriptions and reset their buttons
      document.querySelectorAll('.th-product-desc.expanded').forEach(function(el) {
          if (el.id !== id) {
              el.classList.remove('expanded');
          }
      });
      document.querySelectorAll('.th-read-more-btn').forEach(function(el) {
          if (el !== btn) {
              el.innerText = 'Read More';
          }
      });

      // Toggle the clicked one
      const desc = document.getElementById(id);
      if (desc.classList.contains('expanded')) {
          desc.classList.remove('expanded');
          btn.innerText = 'Read More';
      } else {
          desc.classList.add('expanded');
          btn.innerText = 'Read Less';
      }
    }
  </script>
@endpush
