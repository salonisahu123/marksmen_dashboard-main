@extends('frontend.layout.main')

@section('title', 'Clients - Marksmen Group')

@section('content')
  <!-- SUBPAGE HERO (Full-Bleed Angled Cut Banner) -->
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-content reveal">
        <span class="page-hero-tag"><i class="fa-solid fa-handshake"></i> Strategic Alliances</span>
        <h1 class="page-hero-title">OEM Partners & <span>Clients</span></h1>
        <p class="page-hero-desc">
          Direct Tier-1 OEM alignments with global infrastructure titans, and trusted supply partnerships with India's largest infrastructure conglomerates and public sector undertakings.
        </p>
        <div class="page-hero-stats-row">
          <span class="hero-stat-pill"><i class="fa-solid fa-gem"></i> Tier-1 OEM Brands</span>
          <span class="hero-stat-pill"><i class="fa-solid fa-city"></i> Major Infra Clients</span>
          <span class="hero-stat-pill"><i class="fa-solid fa-thumbs-up"></i> 1000+ Fleets Powered</span>
        </div>
      </div>
    </div>

    <!-- Right Side Full-Bleed Angled Media -->
    <div class="page-hero-media reveal">
      <img src="{{ asset('frontend/assets/images/clients_hero_banner.png') }}" alt="Schwing Stetter Concrete Transit Mixer Equipment">
      <div class="page-hero-badge-overlay">
        <i class="fa-solid fa-truck-droplet"></i> Schwing Stetter Concrete Systems
      </div>
    </div>
  </section>

  <!-- AUTHORIZED OEMS -->
  <section id="oem" class="section-padding" style="background-color: white;">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">OEM Relationships</span>
        <h2 class="section-title">Global Engineering Alliances</h2>
        <p class="section-subtitle">We build direct structural networks with premier global manufacturers to deliver authenticated assets and components.</p>
      </div>

      <div class="clients-grid">
        <div class="client-logo-card reveal" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
          <img src="{{ asset('frontend/assets/images/tata_hitachi_logo.png') }}" alt="Tata Hitachi" style="height: 52px; width: auto; max-width: 90%; object-fit: contain; margin-bottom: 0.75rem; margin-top: 1rem;">
          <span class="client-logo-subtext">Construction Machinery</span>
        </div>
        <div class="client-logo-card reveal">
          <img src="{{ asset('frontend/assets/images/eicher_logo.png') }}" alt="Eicher" style="height: 100px; width: auto; max-width: 100%; object-fit: contain; margin-bottom: 0.75rem;">
          <span class="client-logo-subtext">Commercial Vehicles</span>
        </div>
        <div class="client-logo-card reveal">
          <img src="{{ asset('frontend/assets/images/schwing_logo.jpg') }}" alt="Schwing Stetter" style="height: 100px; width: auto; max-width: 100%; object-fit: contain; margin-bottom: 0.75rem;">
          <span class="client-logo-subtext">Concrete Systems</span>
        </div>
        <div class="client-logo-card reveal">
          <img src="{{ asset('frontend/assets/images/ascenso_logo.jpg') }}" alt="Ascenso Tyres" style="height: 100px; width: auto; max-width: 100%; object-fit: contain; margin-bottom: 0.75rem;">
          <span class="client-logo-subtext">OTR / Industrial Tyres</span>
        </div>
      </div>
    </div>
  </section>

  <!-- KEY CUSTOMERS (From Brief) -->
  <section id="customers" class="section-padding" style="background-color: var(--bg-white);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">Key Customers</span>
        <h2 class="section-title">Serving Central India's <span>Largest Enterprises</span></h2>
        <p class="section-subtitle">We are proud to support leading infrastructure and construction groups.</p>
      </div>
      
      <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1.5rem; align-items: center; padding: 2rem 0;">
        @forelse($keyCustomers as $customer)
          <div style="padding: 0.5rem; background: #fff; border: 1px solid rgba(0,0,0,0.05); border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); display: flex; align-items: center; justify-content: center; height: 120px; width: 240px; transition: transform 0.3s ease; text-align: center;">
            @if($customer->logo)
              <img src="{{ asset('uploads/' . $customer->logo) }}" alt="{{ $customer->name }}" style="max-height: 90px; max-width: 210px; object-fit: contain;">
            @else
              <span style="font-weight: 800; font-size: 1.25rem; color: #333; letter-spacing: 0.5px;">{{ $customer->name }}</span>
            @endif
          </div>
        @empty
          <div style="text-align: center; color: var(--text-muted); width: 100%;">No client records found.</div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section class="testimonials-section section-padding">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">Client Feedback</span>
        <h2 class="section-title" style="color: white;">What Our Partners Say</h2>
        <p class="section-subtitle" style="color: rgba(255, 255, 255, 0.75);">Discover how we assist building contractors and builders in maximizing their asset uptime and project delivery speeds.</p>
      </div>

      <div class="testimonials-grid">
        @forelse($testimonials as $test)
          <div class="testimonial-card reveal">
            <p class="testimonial-quote">
              "{{ $test->content }}"
            </p>
            <div class="testimonial-author">
              <div class="author-avatar">{{ strtoupper(substr($test->author_name, 0, 2)) }}</div>
              <div class="author-info">
                <h5>{{ $test->author_name }}</h5>
                <p>{{ $test->author_designation ?? 'Valued Partner' }}</p>
              </div>
            </div>
          </div>
        @empty
          <div style="text-align: center; color: rgba(255, 255, 255, 0.7); width: 100%;">No testimonials found.</div>
        @endforelse
      </div>
    </div>
  </section>
@endsection