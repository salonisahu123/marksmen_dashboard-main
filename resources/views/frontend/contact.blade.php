@extends('frontend.layout.main')

@section('title', 'Contact Us - Marksmen Group')

@section('content')
  <!-- SUBPAGE HERO (Full-Bleed Angled Cut Banner) -->
  <section class="page-hero">
    <div class="container">
      <div class="page-hero-content reveal">
        <span class="page-hero-tag"><i class="fa-solid fa-headset"></i> Get In Touch</span>
        <h1 class="page-hero-title">Contact Our <span>Offices</span></h1>
        <p class="page-hero-desc">
          Connect with our Corporate Headquarters in Bhopal or reach our regional branches and certified workshops across Madhya Pradesh.
        </p>
        <div class="page-hero-stats-row">
          <span class="hero-stat-pill"><i class="fa-solid fa-phone"></i> +91 98939 11155</span>
          <span class="hero-stat-pill"><i class="fa-solid fa-envelope"></i> info@marksmengroup.in</span>
          <span class="hero-stat-pill"><i class="fa-solid fa-clock"></i> Mon - Sat: 9 AM - 7 PM</span>
        </div>
      </div>
    </div>

    <!-- Right Side Full-Bleed Angled Media -->
    <div class="page-hero-media reveal">
      <img src="{{ asset('frontend/assets/images/contact_hero_banner.png') }}" alt="Tata Hitachi Mining Excavator 24/7 Support Operations">
      <div class="page-hero-badge-overlay">
        <i class="fa-solid fa-headset"></i> 24/7 Field Service & Support
      </div>
    </div>
  </section>

  <!-- QUICK CONTACT CHANNELS -->
  <section class="section-padding" style="background-color: var(--bg-white);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">Direct Lines</span>
        <h2 class="section-title">Key Contact <span>Channels</span></h2>
        <p class="section-subtitle">Reach the right department or regional facility directly for rapid assistance.</p>
      </div>

      <div class="contact-channels-grid">
        <!-- Bhopal -->
        <div class="contact-channel-card reveal">
          <div class="contact-channel-icon"><i class="fa-solid fa-building-columns"></i></div>
          <span class="contact-channel-tag">Headquarters</span>
          <h4>Bhopal Headquarters</h4>
          <p class="contact-channel-info">233 - Ganesh Nagar, Bawadia Kalan, Hoshangabad Road, Bhopal - 462026</p>
          <a href="tel:+919893911155" class="contact-channel-link"><i class="fa-solid fa-phone"></i> +91 98939 11155</a>
        </div>

        <!-- Gwalior Workshop -->
        <div class="contact-channel-card reveal">
          <div class="contact-channel-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
          <span class="contact-channel-tag">Branch</span>
          <h4>Gwalior Workshop</h4>
          <p class="contact-channel-info">NH - 46, Village - Santau, Near Sheetla Mata Mandir (New Four Lane Highway), Jhansi Shivpuri Road, Gwalior, Madhya Pradesh - 475330</p>
          <a href="tel:+918318732291" class="contact-channel-link"><i class="fa-solid fa-phone"></i> +91 83187 32291</a>
        </div>

        <!-- Gwalior Office -->
        <div class="contact-channel-card reveal">
          <div class="contact-channel-icon"><i class="fa-solid fa-building"></i></div>
          <span class="contact-channel-tag">Regional Office</span>
          <h4>Gwalior Office</h4>
          <p class="contact-channel-info">349, Marksmen Construction Equipment, Near Padma Girls Hostel, Opposite Chirayu Hospital, City Centre, Gwalior, Madhya Pradesh - 474011</p>
          <a href="tel:+918318732291" class="contact-channel-link"><i class="fa-solid fa-phone"></i> +91 83187 32291</a>
        </div>

        <!-- Sagar -->
        <div class="contact-channel-card reveal">
          <div class="contact-channel-icon"><i class="fa-solid fa-boxes-packing"></i></div>
          <span class="contact-channel-tag">Branch</span>
          <h4>Sagar Branch</h4>
          <p class="contact-channel-info">Jabalpur Road, Near Deepali Hotel, Baheriya, Makronia, Sagar - 470001</p>
          <a href="tel:+917415503003" class="contact-channel-link"><i class="fa-solid fa-phone"></i> +91 74155 03003</a>
        </div>

        <!-- Betul -->
        <div class="contact-channel-card reveal">
          <div class="contact-channel-icon"><i class="fa-solid fa-truck-fast"></i></div>
          <span class="contact-channel-tag">Branch</span>
          <h4>Betul Branch</h4>
          <p class="contact-channel-info">Itarsi Road, Near Om Residency, Opp. Daga Oil Mill, Betul - 460001</p>
          <a href="tel:+919201987779" class="contact-channel-link"><i class="fa-solid fa-phone"></i> +91 92019 87779</a>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTACT WORKSPACE (2-Column Split: Info Card & Form) -->
  <section class="section-padding" style="background-color: var(--bg-light); border-top: 1px solid var(--border-color);">
    <div class="container">
      <div class="contact-main-grid">
        
        <!-- Left: Executive Info Panel -->
        <div class="contact-info-card reveal">
          <div class="info-header">
            <span class="section-tag" style="color: var(--accent); margin-bottom: 0.35rem;">Direct Assistance</span>
            <h3>Let’s Discuss Your Machinery & Fleet Needs</h3>
            <p>Our infrastructure specialists and service managers are available to assist with machinery procurement, genuine OEM parts supply, and site maintenance.</p>
          </div>

          <div class="contact-info-block-list">
            <!-- HQ Address -->
            <div class="contact-info-item">
              <div class="item-icon"><i class="fa-solid fa-location-dot"></i></div>
              <div class="item-content">
                <h5>Corporate Headquarters</h5>
                <p>233 - Ganesh Nagar, Bawadia Kalan, Ward 53, Hoshangabad Road, Bhopal, MP - 462026</p>
              </div>
            </div>

            <!-- Phone -->
            <div class="contact-info-item">
              <div class="item-icon"><i class="fa-solid fa-phone"></i></div>
              <div class="item-content">
                <h5>Direct Telephone Numbers</h5>
                <p><a href="tel:+919893911155">+91 98939 11155</a>, <a href="tel:+919201987779">+91 92019 87779</a></p>
              </div>
            </div>

            <!-- Email -->
            <div class="contact-info-item">
              <div class="item-icon"><i class="fa-solid fa-envelope"></i></div>
              <div class="item-content">
                <h5>Email Inquiries</h5>
                <p><a href="mailto:info@marksmengroup.in">info@marksmengroup.in</a></p>
              </div>
            </div>

            <!-- Operating Hours -->
            <div class="contact-info-item">
              <div class="item-icon"><i class="fa-solid fa-business-time"></i></div>
              <div class="item-content">
                <h5>Operating Hours</h5>
                <p>Monday - Saturday: 9:00 AM - 7:00 PM <br><span style="color: var(--accent); font-size: 0.82rem; font-weight: 700;">24/7 Emergency Breakdown Support Available</span></p>
              </div>
            </div>
          </div>

          <!-- WhatsApp Desk CTA -->
          <div class="contact-whatsapp-cta">
            <div class="wa-text">
              <h5><i class="fa-brands fa-whatsapp" style="font-size: 1.15rem; vertical-align: middle;"></i> Instant WhatsApp Desk</h5>
              <p>Chat directly with our central dispatch team</p>
            </div>
            <a href="https://wa.me/919893911155?text=Hello%20Marksmen%20Group,%20I%20have%20an%20inquiry." target="_blank" class="btn-wa-direct">
              Chat Now <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Right: Premium Contact Form -->
        <div class="contact-form-premium reveal">
          <h3>Send a Message</h3>
          <p class="form-subtext">Fill in your requirements below and our technical sales team will respond promptly.</p>
          
          <form id="contact-write-form">
            <div class="contact-form-grid">
              
              <!-- Name -->
              <div class="form-group">
                <label for="co-name">Your Full Name <span class="req">*</span></label>
                <div class="form-field-input-wrapper">
                  <i class="fa-solid fa-user"></i>
                  <input type="text" id="co-name" class="form-input" placeholder="Your name" required>
                </div>
              </div>

              <!-- Mobile -->
              <div class="form-group">
                <label for="co-phone">Mobile Number <span class="req">*</span></label>
                <div class="form-field-input-wrapper">
                  <i class="fa-solid fa-phone"></i>
                  <input type="tel" id="co-phone" class="form-input" placeholder="10-digit mobile number" required>
                </div>
              </div>

              <!-- Location -->
              <div class="form-group">
                <label for="co-location">City / Location <span class="req">*</span></label>
                <div class="form-field-input-wrapper">
                  <i class="fa-solid fa-location-dot"></i>
                  <input type="text" id="co-location" class="form-input" placeholder="Your location (e.g. Bhopal)" required>
                </div>
              </div>

              <!-- Email -->
              <div class="form-group">
                <label for="co-email">Email Address</label>
                <div class="form-field-input-wrapper">
                  <i class="fa-solid fa-envelope"></i>
                  <input type="email" id="co-email" class="form-input" placeholder="Email address">
                </div>
              </div>

              <!-- Product / Enquiry Text Input -->
              <div class="form-group full-width">
                <label for="co-enquiry">Product / Requirement Enquiry <span class="req">*</span></label>
                <div class="form-field-input-wrapper">
                  <i class="fa-solid fa-boxes-stacked"></i>
                  <input type="text" id="co-enquiry" class="form-input" value="{{ request('product') ?? request('enquiry') ?? '' }}" placeholder="e.g. Tata Hitachi Excavator, Ascenso Tyres, Spares..." required>
                </div>
              </div>

              <!-- Message -->
              <div class="form-group full-width">
                <label for="co-message">Detailed Requirements / Message</label>
                <div class="form-field-input-wrapper" style="align-items: flex-start;">
                  <i class="fa-solid fa-comment textarea-icon"></i>
                  <textarea id="co-message" class="form-textarea" placeholder="Provide machine model, spare part numbers, or project timeline..."></textarea>
                </div>
              </div>

              <!-- Submit Button -->
              <div class="form-group full-width">
                <button type="submit" class="btn btn-primary btn-submit-contact">
                  Send Message <i class="fa-solid fa-paper-plane"></i>
                </button>
                <p class="form-privacy-note">
                  <i class="fa-solid fa-shield-halved" style="color: var(--accent);"></i> Inquiries are directly routed to the relevant Marksmen regional desk.
                </p>
              </div>

            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- REGIONAL OPERATIONAL NETWORK (4 Cards in Clean 4-Col Grid) -->
  <section class="section-padding" style="background-color: var(--bg-white); border-top: 1px solid var(--border-color);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">Regional Network</span>
        <h2 class="section-title">Our Operational <span>Branches</span></h2>
        <p class="section-subtitle">Visit our certified facilities, stockyards, and engineering service hubs across Central India.</p>
      </div>

      <div class="branches-4col-grid">
        
        <!-- Bhopal HQ -->
        <div class="branch-hub-card reveal">
          <div class="branch-hub-media">
            <img src="{{ asset('frontend/assets/images/IMG23.jpeg') }}" alt="Marksmen House Bhopal Headquarters">
            <div class="branch-hub-title-overlay">
              <h4>Bhopal Headquarters</h4>
            </div>
          </div>
          <div class="branch-hub-body">
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <p>Corporate HQ, OEM Partnerships, Commercial Sales & Finance</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-location-dot"></i>
              <p>233 - Ganesh Nagar, Bawadia Kalan, Bhopal - 462026</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-phone"></i>
              <p><a href="tel:+919893911155">+91 98939 11155</a></p>
            </div>
          </div>
          <div class="branch-hub-footer">
            <a href="https://maps.google.com/?q=233+-+Ganesh+Nagar,+Bawadia+Kalan,+Ward+53,+Hoshangabad+Road,+Bhopal+-+462026" target="_blank" class="btn-branch-directions">
              <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
            </a>
          </div>
        </div>

        <!-- Gwalior Workshop -->
        <div class="branch-hub-card reveal">
          <div class="branch-hub-media">
            <img src="{{ asset('frontend/assets/images/eicher_workshop_gwalior.jpeg') }}" alt="Marksmen Eicher Gwalior Workshop">
            <div class="branch-hub-title-overlay">
              <h4>Gwalior Workshop</h4>
            </div>
          </div>
          <div class="branch-hub-body">
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <p>Computer Diagnostics, Hydraulic Overhauls & OEM Parts</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-location-dot"></i>
              <p>NH - 46, Village - Santau, Near Sheetla Mata Mandir (New Four Lane Highway), Jhansi Shivpuri Road, Gwalior, Madhya Pradesh - 475330</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-phone"></i>
              <p><a href="tel:+918318732291">+91 83187 32291</a></p>
            </div>
          </div>
          <div class="branch-hub-footer">
            <a href="https://maps.google.com/?q=NH-46,+Village+Santau,+Near+Sheetla+Mata+Mandir,+Jhansi+Shivpuri+Road,+Gwalior,+Madhya+Pradesh+475330" target="_blank" class="btn-branch-directions">
              <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
            </a>
          </div>
        </div>

        <!-- Gwalior Office -->
        <div class="branch-hub-card reveal">
          <div class="branch-hub-media">
            <img src="{{ asset('frontend/assets/images/img7.jpeg') }}" alt="Marksmen Construction Equipment Gwalior Office">
            <div class="branch-hub-title-overlay">
              <h4>Gwalior Office</h4>
            </div>
          </div>
          <div class="branch-hub-body">
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-building"></i>
              <p>Regional Administration, Sales Inquiries & Customer Support</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-location-dot"></i>
              <p>349, Marksmen Construction Equipment, Near Padma Girls Hostel, Opposite Chirayu Hospital, City Centre, Gwalior, Madhya Pradesh - 474011</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-phone"></i>
              <p><a href="tel:+918318732291">+91 83187 32291</a></p>
            </div>
          </div>
          <div class="branch-hub-footer">
            <a href="https://maps.google.com/?q=349,+Marksmen+Construction+Equipment,+Near+Padma+Girls+Hostel,+Opposite+Chirayu+Hospital,+City+Centre,+Gwalior,+Madhya+Pradesh+474011" target="_blank" class="btn-branch-directions">
              <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
            </a>
          </div>
        </div>

        <!-- Sagar Branch -->
        <div class="branch-hub-card reveal">
          <div class="branch-hub-media">
            <img src="{{ asset('frontend/assets/images/img11.jpeg') }}" alt="Marksmen Construction Equipments Sagar Showroom">
            <div class="branch-hub-title-overlay">
              <h4>Sagar Branch</h4>
            </div>
          </div>
          <div class="branch-hub-body">
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <p>Regional Sales Office, Spare Parts Warehousing & Logistics</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-location-dot"></i>
              <p>Jabalpur Road, Near Deepali Hotel, Makronia, Sagar - 470001</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-phone"></i>
              <p><a href="tel:+917415503003">+91 74155 03003</a></p>
            </div>
          </div>
          <div class="branch-hub-footer">
            <a href="https://maps.google.com/?q=Jabalpur+Road,+Near+Deepali+Hotel,+Baheriya,+Makronia,+Sagar+(M.P.)+–+470001" target="_blank" class="btn-branch-directions">
              <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
            </a>
          </div>
        </div>

        <!-- Betul Branch -->
        <div class="branch-hub-card reveal">
          <div class="branch-hub-media">
            <img src="{{ asset('frontend/assets/images/img10.jpeg') }}" alt="Marksmen Betul Regional Branch Setup">
            <div class="branch-hub-title-overlay">
              <h4>Betul Branch</h4>
            </div>
          </div>
          <div class="branch-hub-body">
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <p>On-Site Breakdown Engineering, Mobile Vans & Local Care</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-location-dot"></i>
              <p>Itarsi Road, Opp. Daga Oil Mill, Betul (M.P.) - 460001</p>
            </div>
            <div class="branch-hub-info-row">
              <i class="fa-solid fa-phone"></i>
              <p><a href="tel:+919201987779">+91 92019 87779</a></p>
            </div>
          </div>
          <div class="branch-hub-footer">
            <a href="https://maps.google.com/?q=Itarsi+Road,+Near+Om+Residency,+Opposite+Daga+Oil+Mill,+Betul+(M.P.)+–+460001" target="_blank" class="btn-branch-directions">
              <i class="fa-solid fa-diamond-turn-right"></i> Get Directions
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- GOOGLE MAPS SECTION -->
  <section class="section-padding" style="background-color: var(--bg-light); border-top: 1px solid var(--border-color);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">Interactive Location</span>
        <h2 class="section-title">Bhopal Corporate HQ <span>Map</span></h2>
        <p class="section-subtitle">Navigate directly to our head office on Hoshangabad Road, Bhopal.</p>
      </div>

      <div class="contact-map-frame reveal">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.863116812836!2d77.43981881146208!3d23.21160357896431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c42407559e211%3A0x4a7e780775d7945d!2sHoshangabad%20Rd%2C%20Bhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1710000000000!5m2!1sen!2sin" width="100%" height="420" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
@endsection