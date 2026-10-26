  <!-- TOP BAR (Exact Esinfraserve Style) -->
  <div class="top-bar">
    <div class="container top-bar-content">
      <div class="top-bar-left">
        <a href="https://www.linkedin.com/in/marksmen-construction-38b38a348/" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://www.instagram.com/marksmen_group_/" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.youtube.com/@MarketingMarksman" target="_blank" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
      </div>
      <div class="top-bar-right">
        <span>Incorporated since 2017, 9+ years experience in construction equipment & OTR tires</span>
      </div>
    </div>
  </div>

  <!-- MAIN HEADER CONTAINER -->
<header class="main-header">
    <div class="header-grid-container">
      
      <!-- Logo Column (Left) -->
      <div class="header-logo-col">
        <a href="{{ url('/') }}" class="logo-link">
          <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Marksmen Group Logo" class="logo-img-ref">
        </a>
      </div>
      
      <!-- Right Content Column -->
      <div class="header-right-col">
        
        <!-- Contact Details -->
        <div class="header-contact-wrapper">
          <div class="header-contact-row-top">
            <div class="contact-detail-block">
              <i class="fa-solid fa-location-crosshairs map-icon-gold"></i>
              <a href="https://maps.google.com/?q=233+-+Ganesh+Nagar,+Bawadia+Kalan,+Ward+53,+Hoshangabad+Road,+Bhopal+-+462026" target="_blank">Bawadia Kalan, Bhopal</a>
            </div>
            <div class="contact-detail-block">
              <i class="fa-solid fa-envelope-open-text envelope-icon-gold"></i>
              <a href="mailto:info@marksmengroup.in">info@marksmengroup.in</a>
            </div>
          </div>
          <div class="header-contact-row-bottom">
            <div class="contact-detail-block">
              <i class="fa-brands fa-square-whatsapp whatsapp-icon-green" style="font-size: 1.15rem;"></i>
              <a href="https://wa.me/919893911155" target="_blank">+91 9893911155</a>
              <span style="color: rgba(0,0,0,0.25); margin: 0 0.25rem;">/</span>
              <a href="https://wa.me/919201987779" target="_blank">+91 9201987779</a>
            </div>
          </div>
        </div>
        
        <!-- Row 2: Navigation Bar (Dark Charcoal Block) -->
        <div class="header-navigation-row">
          <nav class="nav-menu-ref">
            <a href="{{ url('/') }}" class="nav-item active"><i class="fa-solid fa-house-chimney" style="font-size: 0.85rem; margin-right: 0.35rem;"></i> Home</a>
            <a href="{{ url('/about') }}" class="nav-item"><i class="fa-solid fa-building-user" style="font-size: 0.85rem; margin-right: 0.35rem;"></i> About Us</a>
            
            <!-- Products & Services Dropdown -->
            <div class="nav-dropdown">
              <a href="{{ url('/services') }}" class="nav-item"><i class="fa-solid fa-layer-group" style="font-size: 0.85rem; margin-right: 0.35rem;"></i> Products & Services <i class="fa-solid fa-chevron-down" style="font-size: 0.7rem; margin-left: 0.25rem;"></i></a>
              <div class="dropdown-menu">
                <a href="{{ url('/tata-hitachi') }}" class="dropdown-item"><i class="fa-solid fa-truck-monster" style="font-size: 0.85rem; margin-right: 0.6rem; color: var(--accent);"></i> Tata Hitachi Heavy Machinery</a>
                <a href="{{ url('/schwing-stetter') }}" class="dropdown-item"><i class="fa-solid fa-cubes-stacked" style="font-size: 0.85rem; margin-right: 0.6rem; color: var(--accent);"></i> Schwing Stetter Concrete Systems</a>
                <a href="{{ url('/ascenso-tyres') }}" class="dropdown-item"><i class="fa-solid fa-circle-dot" style="font-size: 0.85rem; margin-right: 0.6rem; color: var(--accent);"></i> Ascenso OTR & Off-Road Tyres</a>
                <a href="{{ url('/eicher-trucks') }}" class="dropdown-item"><i class="fa-solid fa-truck-fast" style="font-size: 0.85rem; margin-right: 0.6rem; color: var(--accent);"></i> Eicher Commercial Trucks</a>
              </div>
            </div>

            <!-- Gallery Link -->
            <a href="{{ url('/gallery') }}" class="nav-item"><i class="fa-solid fa-images" style="font-size: 0.85rem; margin-right: 0.35rem;"></i> Gallery</a>

            <!-- Clients Dropdown -->
            <div class="nav-dropdown">
              <a href="{{ url('/clients') }}" class="nav-item"><i class="fa-solid fa-handshake" style="font-size: 0.85rem; margin-right: 0.35rem;"></i> Clients <i class="fa-solid fa-chevron-down" style="font-size: 0.7rem; margin-left: 0.25rem;"></i></a>
              <div class="dropdown-menu">
                <a href="{{ url('/clients/oem') }}" class="dropdown-item"><i class="fa-solid fa-handshake-angle" style="font-size: 0.85rem; margin-right: 0.6rem; color: var(--accent);"></i> Authorized OEM Alliances</a>
                <a href="{{ url('/clients/customers') }}" class="dropdown-item"><i class="fa-solid fa-building-circle-check" style="font-size: 0.85rem; margin-right: 0.6rem; color: var(--accent);"></i> Prime Infrastructure Customers</a>
              </div>
            </div>

            <a href="{{ url('/careers') }}" class="nav-item"><i class="fa-solid fa-briefcase" style="font-size: 0.85rem; margin-right: 0.35rem;"></i> Careers</a>
            <a href="{{ url('/contact') }}" class="nav-item"><i class="fa-solid fa-headset" style="font-size: 0.85rem; margin-right: 0.35rem;"></i> Contact Us</a>
          </nav>
          
          <!-- Hamburger menu for mobile -->
          <button class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        
      </div>
      
    </div>
</header>

<!-- MOBILE NAVIGATION DRAWER -->
  <div class="mobile-nav">
    <div class="mobile-nav-close">&times;</div>
    <div class="mobile-menu">
      <a href="{{ url('/') }}" class="mobile-link active"><i class="fa-solid fa-house-chimney"></i> Home</a>
      <a href="{{ url('/about') }}" class="mobile-link"><i class="fa-solid fa-building-user"></i> About Us</a>
      <div class="mobile-nav-dropdown">
        <div class="mobile-dropdown-header" style="display: flex; align-items: center; justify-content: space-between;"><a href="{{ url('/services') }}" class="mobile-link" style="flex: 1; border-bottom: none;"><i class="fa-solid fa-layer-group"></i> Products & Services</a><i class="fa-solid fa-chevron-down mobile-sub-toggle" style="padding: 15px; color: var(--accent); cursor: pointer; transition: transform 0.3s ease;"></i></div>
        <div class="mobile-sub-menu" style="padding-left: 2rem; display: none; flex-direction: column; margin-bottom: 0.5rem;">
          <a href="{{ url('/tata-hitachi') }}" class="mobile-link" style="font-size: 0.9rem; padding: 8px 10px; border-bottom: none;"><i class="fa-solid fa-truck-monster" style="font-size: 0.8rem;"></i> Tata Hitachi</a>
          <a href="{{ url('/schwing-stetter') }}" class="mobile-link" style="font-size: 0.9rem; padding: 8px 10px; border-bottom: none;"><i class="fa-solid fa-cubes-stacked" style="font-size: 0.8rem;"></i> Schwing Stetter</a>
          <a href="{{ url('/ascenso-tyres') }}" class="mobile-link" style="font-size: 0.9rem; padding: 8px 10px; border-bottom: none;"><i class="fa-solid fa-circle-dot" style="font-size: 0.8rem;"></i> Ascenso Tyres</a>
          <a href="{{ url('/eicher-trucks') }}" class="mobile-link" style="font-size: 0.9rem; padding: 8px 10px; border-bottom: none;"><i class="fa-solid fa-truck-fast" style="font-size: 0.8rem;"></i> Eicher Trucks</a>
        </div>
      </div>
      <a href="{{ url('/gallery') }}" class="mobile-link"><i class="fa-solid fa-images"></i> Gallery</a>
      <a href="{{ url('/clients') }}" class="mobile-link"><i class="fa-solid fa-handshake"></i> Clients</a>
      <a href="{{ url('/careers') }}" class="mobile-link"><i class="fa-solid fa-briefcase"></i> Careers</a>
      <a href="{{ url('/contact') }}" class="mobile-link"><i class="fa-solid fa-headset"></i> Contact Us</a>
          </div>
      <div class="mobile-contact-info" style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.1); display: flex; flex-direction: column; gap: 1rem;">
        <div style="color: rgba(255,255,255,0.8); font-size: 0.95rem; display: flex; align-items: flex-start; gap: 0.75rem;">
          <i class="fa-solid fa-location-crosshairs" style="color: var(--accent); margin-top: 4px;"></i>
          <a href="https://maps.google.com/?q=233+-+Ganesh+Nagar,+Bawadia+Kalan,+Ward+53,+Hoshangabad+Road,+Bhopal+-+462026" target="_blank" style="color: inherit; text-decoration: none;">Bawadia Kalan, Bhopal</a>
        </div>
        <div style="color: rgba(255,255,255,0.8); font-size: 0.95rem; display: flex; align-items: center; gap: 0.75rem;">
          <i class="fa-solid fa-envelope-open-text" style="color: var(--accent);"></i>
          <a href="mailto:info@marksmengroup.in" style="color: inherit; text-decoration: none;">info@marksmengroup.in</a>
        </div>
        <div style="color: rgba(255,255,255,0.8); font-size: 0.95rem; display: flex; align-items: center; gap: 0.75rem;">
          <i class="fa-brands fa-square-whatsapp" style="color: #25D366; font-size: 1.15rem;"></i>
          <span>
            <a href="https://wa.me/919893911155" target="_blank" style="color: inherit; text-decoration: none;">+91 9893911155</a> / 
            <a href="https://wa.me/919201987779" target="_blank" style="color: inherit; text-decoration: none;">+91 9201987779</a>
          </span>
        </div>
      </div>
      <div class="mobile-nav-cta">
      <button class="btn btn-primary btn-enquire" style="width: 100%;"><i class="fa-solid fa-paper-plane" style="margin-right: 0.4rem;"></i> Enquire Now</button>
    </div>
  </div>
  <div class="overlay"></div>