<footer class="enterprise-footer">

    <div class="container footer-grid">

        <!-- ================= FOOTER ABOUT ================= -->
        <div class="footer-col footer-about">

            <a href="{{ url('/') }}" class="logo-container footer-logo">

                <img src="{{ asset('frontend/assets/images/logo.png') }}"
                     alt="Marksmen Group Logo"
                     class="brand-logo-img">

            </a>

            <p>
                A professionally governed, rapidly expanding infrastructure
                solutions group delivering high-end machinery and commercial
                mobility solutions across Central India.
            </p>

        </div>


        <!-- ================= QUICK LINKS ================= -->
        <div class="footer-col">

            <h3>Quick Links</h3>

            <ul class="footer-links-list">

                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li>
                    <a href="{{ url('/about') }}">About Us</a>
                </li>

                <li>
                    <a href="{{ url('/services') }}">Products &amp; Services</a>
                </li>

                <li>
                    <a href="{{ url('/gallery') }}">Gallery</a>
                </li>

                <li>
                    <a href="{{ url('/clients') }}">Clients</a>
                </li>

                <li>
                    <a href="{{ url('/careers') }}">Careers</a>
                </li>

                <li>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </li>

            </ul>

        </div>


        <!-- ================= OUR ADDRESS ================= -->
        <div class="footer-col footer-address">

            <h3>Our Address</h3>

            <div class="footer-contact-list">

                <!-- HEAD OFFICE -->
                <div class="footer-contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <div class="footer-contact-text">

                        <h5>Head Office (Bhopal)</h5>

                        <p>
                            233 - Ganesh Nagar, Bawadia Kalan,
                            Ward 53, Hoshangabad Road,
                            Bhopal - 462026
                        </p>

                    </div>

                </div>


                <!-- GWALIOR WORKSHOP -->
                <div class="footer-contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <div class="footer-contact-text">

                        <h5>Gwalior Workshop</h5>

                        <p>
                            NH - 46, Village - Santau, Near Sheetla Mata Mandir (New Four Lane Highway), Jhansi Shivpuri Road, Gwalior, Madhya Pradesh - 475330
                        </p>

                    </div>

                </div>

                <!-- GWALIOR OFFICE -->
                <div class="footer-contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <div class="footer-contact-text">

                        <h5>Gwalior Office</h5>

                        <p>
                            349, Marksmen Construction Equipment, Near Padma Girls Hostel, Opposite Chirayu Hospital, City Centre, Gwalior, Madhya Pradesh - 474011
                        </p>

                    </div>

                </div>


                <!-- SAGAR BRANCH -->
                <div class="footer-contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <div class="footer-contact-text">

                        <h5>Sagar Branch</h5>

                        <p>
                            Jabalpur Road, Near Deepali Hotel,
                            Baheriya, Makronia,
                            Sagar (M.P.) - 470001
                        </p>

                    </div>

                </div>


                <!-- BETUL BRANCH -->
                <div class="footer-contact-item">

                    <i class="fa-solid fa-location-dot"></i>

                    <div class="footer-contact-text">

                        <h5>Betul Branch</h5>

                        <p>
                            Itarsi Road, Near Om Residency,
                            Opposite Daga Oil Mill,
                            Betul (M.P.) - 460001
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- ================= SOCIAL MEDIA ================= -->
        <div class="footer-col footer-social">

            <h3>Social Media</h3>

            <p>
                Follow us on our official channels to stay updated on
                our heavy machinery portfolios, service launches,
                and team delivery events.
            </p>

            <div class="social-links">

                <a href="https://www.linkedin.com/in/marksmen-construction-38b38a348/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="LinkedIn">

                    <i class="fa-brands fa-linkedin-in"></i>

                </a>


                <a href="https://www.instagram.com/marksmen_group_/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Instagram">

                    <i class="fa-brands fa-instagram"></i>

                </a>


                <a href="https://www.youtube.com/@MarketingMarksman"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="YouTube">

                    <i class="fa-brands fa-youtube"></i>

                </a>

            </div>

        </div>

    </div>


    <!-- ================= FOOTER BOTTOM ================= -->

    <div class="container footer-bottom">

        <p>
            &copy; {{ date('Y') }} Marksmen Group. All Rights Reserved.
            Managed by Act T Connect
        </p>

        <div class="footer-bottom-links">

            <a href="#">Privacy Policy</a>

            <a href="#">Terms &amp; Conditions</a>

        </div>

    </div>

</footer>

  <!-- FLOATING ACTION BUTTONS -->
  <div class="floating-actions">
    <a href="https://wa.me/919893911155" target="_blank" class="floating-btn floating-whatsapp" title="WhatsApp Us"><i class="fa-brands fa-whatsapp"></i></a>
    <a href="tel:+919893911155" class="floating-btn floating-call" title="Call Us"><i class="fa-solid fa-phone"></i></a>
  </div>

  <!-- POPUP INQUIRY MODAL -->
  <div class="modal">
    <div class="modal-backdrop"></div>
    <div class="modal-wrapper">
      <div class="modal-close">&times;</div>
      <h3>Request a Callback</h3>
      <p>Submit your details and our machinery experts will call you to discuss your project requirements.</p>
      <form id="modal-callback-form">
        <div class="modal-form-grid">
          <div class="form-group">
            <label for="m-name">Name *</label>
            <div class="form-field-input-wrapper">
              <i class="fa-solid fa-user"></i>
              <input type="text" id="m-name" class="form-input" placeholder="Your name" required>
            </div>
          </div>
          <div class="form-group">
            <label for="m-phone">Mobile no *</label>
            <div class="form-field-input-wrapper">
              <i class="fa-solid fa-mobile-screen-button"></i>
              <input type="tel" id="m-phone" class="form-input" placeholder="Mobile number" required>
            </div>
          </div>
          <div class="form-group">
            <label for="m-location">Location *</label>
            <div class="form-field-input-wrapper">
              <i class="fa-solid fa-location-dot"></i>
              <input type="text" id="m-location" class="form-input" placeholder="Your location" required>
            </div>
          </div>
          <div class="form-group">
            <label for="m-email">Email address</label>
            <div class="form-field-input-wrapper">
              <i class="fa-solid fa-envelope"></i>
              <input type="email" id="m-email" class="form-input" placeholder="Email address">
            </div>
          </div>
          <div class="form-group full-width">
            <label for="m-enquiry">Product / Requirement Enquiry *</label>
            <div class="form-field-input-wrapper">
              <i class="fa-solid fa-boxes-stacked"></i>
              <input type="text" id="m-enquiry" class="form-input" placeholder="e.g. Tata Hitachi Excavator, Ascenso Tyres, Spares..." required>
            </div>
          </div>
          <div class="form-group full-width">
            <label for="m-message">Message / Requirements</label>
            <div class="form-field-input-wrapper" style="align-items: flex-start;">
              <i class="fa-solid fa-comment" style="top: 0.75rem;"></i>
              <textarea id="m-message" class="form-textarea" placeholder="Tell us about your requirements..."></textarea>
            </div>
          </div>
          <div class="form-group full-width">
            <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Request <i class="fa-solid fa-paper-plane"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Video Player Lightbox Modal with Zoom Animation -->
  <div class="video-modal" id="testimonial-video-modal" aria-hidden="true" role="dialog">
    <div class="video-modal-backdrop"></div>
    <div class="video-modal-container">
      <div class="video-modal-content">
        <button class="video-modal-close" aria-label="Close Video" title="Close (Esc)">
          <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="video-iframe-wrapper">
          <iframe id="video-iframe" src="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>