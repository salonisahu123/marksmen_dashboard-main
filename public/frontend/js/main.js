document.addEventListener('DOMContentLoaded', () => {
  // --- INJECT FONT AWESOME FOR ICONS ---
  const link = document.createElement('link');
  link.rel = 'stylesheet';
  link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css';
  document.head.appendChild(link);

  // --- STICKY HEADER ---
  const header = document.querySelector('header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // --- HERO CAROUSEL SLIDER ---
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.slider-dot');
  const prevBtn = document.querySelector('.slider-prev');
  const nextBtn = document.querySelector('.slider-next');
  let currentSlide = 0;
  let slideInterval;

  const showSlide = (index) => {
    if (slides.length === 0) return;
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    currentSlide = (index + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
    if (dots[currentSlide]) dots[currentSlide].classList.add('active');
  };

  const nextSlide = () => {
    showSlide(currentSlide + 1);
  };

  const prevSlide = () => {
    showSlide(currentSlide - 1);
  };

  const startSlideShow = () => {
    stopSlideShow();
    slideInterval = setInterval(nextSlide, 5000);
  };

  const stopSlideShow = () => {
    if (slideInterval) clearInterval(slideInterval);
  };

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      startSlideShow();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      startSlideShow();
    });
  }

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      showSlide(index);
      startSlideShow();
    });
  });

  if (slides.length > 0) {
    startSlideShow();
  }

  // --- CLIENT TESTIMONIALS SLIDER (3 Cards In A Row, 1-by-1 Slide Controller) ---
  const testimonialItems = document.querySelectorAll('.testimonial-card-item');
  const testimonialDots = document.querySelectorAll('.testimonial-dot');
  const testimonialTrack = document.querySelector('.testimonial-cards-track');
  const testimonialPrevBtn = document.querySelector('#testimonial-prev-btn');
  const testimonialNextBtn = document.querySelector('#testimonial-next-btn');
  const testimonialSlider = document.querySelector('.testimonial-cards-slider');
  
  let currentTestimonial = 0;
  let testimonialInterval = null;
  let touchStartX = 0;
  let touchEndX = 0;

  const getCardsPerView = () => {
    const w = window.innerWidth;
    if (w <= 768) return 1;
    if (w <= 1024) return 2;
    return 3;
  };

  const getMaxIndex = () => {
    const perView = getCardsPerView();
    return Math.max(0, testimonialItems.length - perView);
  };

  const updateTestimonialSlider = (index) => {
    if (!testimonialTrack || testimonialItems.length === 0) return;
    
    const maxIdx = getMaxIndex();
    if (index < 0) {
      currentTestimonial = maxIdx;
    } else if (index > maxIdx) {
      currentTestimonial = 0;
    } else {
      currentTestimonial = index;
    }

    const viewport = document.querySelector('.testimonial-cards-viewport');
    if (viewport && testimonialItems[0]) {
      const perView = getCardsPerView();
      const gap = 24;
      const totalGaps = (perView - 1) * gap;
      const cardWidth = (viewport.clientWidth - totalGaps) / perView;
      const step = cardWidth + gap;
      const offset = currentTestimonial * step;
      testimonialTrack.style.transform = `translateX(-${offset}px)`;
    }

    // Sync active classes
    testimonialItems.forEach((item, idx) => {
      item.classList.toggle('active', idx === currentTestimonial);
    });

    testimonialDots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentTestimonial);
    });
  };

  const nextTestimonial = () => {
    const maxIdx = getMaxIndex();
    if (currentTestimonial >= maxIdx) {
      updateTestimonialSlider(0);
    } else {
      updateTestimonialSlider(currentTestimonial + 1);
    }
  };

  const prevTestimonial = () => {
    const maxIdx = getMaxIndex();
    if (currentTestimonial <= 0) {
      updateTestimonialSlider(maxIdx);
    } else {
      updateTestimonialSlider(currentTestimonial - 1);
    }
  };

  const startTestimonialShow = () => {
    stopTestimonialShow();
    testimonialInterval = setInterval(nextTestimonial, 4500);
  };

  const stopTestimonialShow = () => {
    if (testimonialInterval) {
      clearInterval(testimonialInterval);
      testimonialInterval = null;
    }
  };

  // Nav Button Click Events
  if (testimonialNextBtn) {
    testimonialNextBtn.addEventListener('click', (e) => {
      e.preventDefault();
      nextTestimonial();
      startTestimonialShow();
    });
  }

  if (testimonialPrevBtn) {
    testimonialPrevBtn.addEventListener('click', (e) => {
      e.preventDefault();
      prevTestimonial();
      startTestimonialShow();
    });
  }

  // Dot Click Events
  testimonialDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      updateTestimonialSlider(index);
      startTestimonialShow();
    });
  });

  // Touch Swipe for Mobile & Tablet
  if (testimonialSlider) {
    testimonialSlider.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      stopTestimonialShow();
    }, { passive: true });

    testimonialSlider.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      const swipeDistance = touchStartX - touchEndX;
      if (Math.abs(swipeDistance) > 40) {
        if (swipeDistance > 0) {
          nextTestimonial();
        } else {
          prevTestimonial();
        }
      }
      startTestimonialShow();
    }, { passive: true });

    testimonialSlider.addEventListener('mouseenter', stopTestimonialShow);
    testimonialSlider.addEventListener('mouseleave', startTestimonialShow);
  }

  // Handle Resize
  window.addEventListener('resize', () => {
    updateTestimonialSlider(currentTestimonial);
  });

  // Init Slider on Load
  if (testimonialItems.length > 0) {
    setTimeout(() => {
      updateTestimonialSlider(0);
      startTestimonialShow();
    }, 100);
  }

  // --- MOBILE NAV TOGGLE ---
  const hamburger = document.querySelector('.hamburger');
  const mobileNav = document.querySelector('.mobile-nav');
  const overlay = document.querySelector('.overlay');
  const mobileNavClose = document.querySelector('.mobile-nav-close');

  const toggleMobileNav = () => {
    mobileNav.classList.toggle('active');
    overlay.classList.toggle('active');
  };

  if (hamburger) hamburger.addEventListener('click', toggleMobileNav);
  if (mobileNavClose) mobileNavClose.addEventListener('click', toggleMobileNav);
  if (overlay) overlay.addEventListener('click', toggleMobileNav);

  // Close mobile nav when clicking a link
  const mobileLinks = document.querySelectorAll('.mobile-link');
  mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
      mobileNav.classList.remove('active');
      overlay.classList.remove('active');
    });
  });

  // --- INQUIRY MODAL LOGIC ---
  const modal = document.querySelector('.modal');
  const modalClose = document.querySelector('.modal-close');
  const modalBackdrop = document.querySelector('.modal-backdrop');

  const openModal = (e, productName = null) => {
    if (e && e.preventDefault) e.preventDefault();
    if (modal) {
      if (productName) {
        const modalEnquiryInput = modal.querySelector('#m-enquiry');
        if (modalEnquiryInput) {
          modalEnquiryInput.value = productName;
        }
      }
      modal.classList.add('active');
      const nameInput = modal.querySelector('#m-name');
      if (nameInput) setTimeout(() => nameInput.focus(), 150);
    }
  };

  const closeModal = () => {
    if (modal) modal.classList.remove('active');
  };

  // Event delegation to capture clicks on any enquiry button (including dynamically rendered ones)
  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('.btn-enquire, .floating-enquire, .btn-product-enquire');
    if (trigger) {
      const prodName = trigger.getAttribute('data-product-name') || trigger.dataset.productName || '';
      openModal(e, prodName);
    }
  });

  if (modalClose) modalClose.addEventListener('click', closeModal);
  if (modalBackdrop) modalBackdrop.addEventListener('click', closeModal);

  // Auto-fill Product / Requirement Enquiry from URL parameters if present
  try {
    const urlParams = new URLSearchParams(window.location.search);
    const paramProduct = urlParams.get('product') || urlParams.get('enquiry');
    if (paramProduct) {
      const coInput = document.getElementById('co-enquiry');
      if (coInput) coInput.value = paramProduct;
      const mInput = document.getElementById('m-enquiry');
      if (mInput) mInput.value = paramProduct;
    }
  } catch (err) {
    console.warn('URL params parsing error:', err);
  }

  // Escape key to close modal
  window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeModal();
      closeLightbox();
    }
  });

  // --- REVEAL ANIMATIONS (INTERSECTION OBSERVER) ---
  const reveals = document.querySelectorAll('.reveal');
  const revealCallback = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        observer.unobserve(entry.target); // Animates only once
      }
    });
  };

  const revealObserver = new IntersectionObserver(revealCallback, {
    root: null,
    threshold: 0.15,
    rootMargin: '0px 0px -50px 0px'
  });

  reveals.forEach(reveal => revealObserver.observe(reveal));

  // --- INTERACTIVE TIMELINE (ABOUT PAGE) ---
  const timelineTabs = document.querySelectorAll('.timeline-tab');
  const timelinePanes = document.querySelectorAll('.timeline-pane');

  timelineTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Remove active class from all tabs
      timelineTabs.forEach(t => t.classList.remove('active'));
      // Add active to clicked tab
      tab.classList.add('active');

      const targetId = tab.getAttribute('data-year');

      // Hide all panes
      timelinePanes.forEach(pane => {
        pane.classList.remove('active');
      });

      // Show target pane
      const targetPane = document.getElementById(`milestone-${targetId}`);
      if (targetPane) {
        targetPane.classList.add('active');
      }
    });
  });

  // --- INTERACTIVE CORE VALUES (ABOUT PAGE) ---
  const valueBtns = document.querySelectorAll('.value-letter-btn');
  const valuePane = document.querySelector('.value-detail-pane');

  const valuesData = {
    'M': {
      title: 'Merit & Excellence',
      tag: 'M - Performance & Growth',
      desc: 'We hold a steadfast commitment to performance, building deep internal capabilities, and driving continuous improvement in every operation.'
    },
    'A': {
      title: 'Accountability',
      tag: 'A - Transparency & Ownership',
      desc: 'We stand behind our word. Complete ownership of our commitments with unmatched transparency, responsibility, and commercial honesty.'
    },
    'R': {
      title: 'Reliability',
      tag: 'R - Trusted Support',
      desc: 'Consistency is our cornerstone. We deliver solutions that perform under pressure, backed by a service ecosystem you can depend on 24/7.'
    },
    'K': {
      title: 'Knowledge & Innovation',
      tag: 'K - Future-Ready Thinking',
      desc: 'We drive progress through learning, utilizing advanced diagnostics, and embracing future-ready thinking to optimize heavy equipment productivity.'
    },
    'S': {
      title: 'Service First',
      tag: 'S - Customer-Centric Decisions',
      desc: 'Our customer success lies at the heart of our operations. Every decision we make is aimed at maximizing your project uptime and profitability.'
    },
    'M2': {
      title: 'Mutual Growth',
      tag: 'M - Collaborative Value Creation',
      desc: 'Creating long-term collaborative value for our customers, OEM partners, staff, and institutional stakeholders.'
    },
    'E': {
      title: 'Ethics & Integrity',
      tag: 'E - Governance & Honesty',
      desc: 'Upholding the highest moral and ethical benchmarks. Trustworthy business practices that foster long-term industry credibility.'
    },
    'N': {
      title: 'Nation Building',
      tag: 'N - Economic Development',
      desc: 'Contributing directly to India’s infrastructure progress by delivering essential mobility and construction systems that construct the future.'
    }
  };

  valueBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      valueBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const letterKey = btn.getAttribute('data-value');
      const data = valuesData[letterKey];

      if (data && valuePane) {
        valuePane.style.opacity = 0;
        setTimeout(() => {
          valuePane.querySelector('h3').textContent = data.title;
          valuePane.querySelector('h4').textContent = data.tag;
          valuePane.querySelector('p').textContent = data.desc;
          valuePane.style.opacity = 1;
        }, 200);
      }
    });
  });

  // --- GALLERY FILTER LOGIC ---
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Toggle active class
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterVal = btn.getAttribute('data-filter');

      galleryItems.forEach(item => {
        const itemCat = item.getAttribute('data-category');
        if (filterVal === 'all' || itemCat === filterVal) {
          item.style.display = 'block';
          setTimeout(() => {
            item.style.opacity = 1;
            item.style.transform = 'scale(1)';
          }, 50);
        } else {
          item.style.opacity = 0;
          item.style.transform = 'scale(0.8)';
          setTimeout(() => {
            item.style.display = 'none';
          }, 300);
        }
      });
    });
  });

  // Handle URL path for gallery filters (e.g., /gallery/fleet)
  const handleGalleryPath = () => {
    const path = window.location.pathname;
    if (filterBtns.length > 0) {
      let targetFilter = 'all';
      if (path.includes('/fleet')) targetFilter = 'machinery';
      if (path.includes('/workshop')) targetFilter = 'workshops';
      if (path.includes('/sites')) targetFilter = 'deliveries';

      const targetBtn = Array.from(filterBtns).find(btn => btn.getAttribute('data-filter') === targetFilter);
      if (targetBtn && !targetBtn.classList.contains('active')) {
        targetBtn.click(); // Trigger the click event to run the existing filter logic
      }
    }
  };

  // Handle URL path for clients scroll (e.g., /clients/oem)
  const handleClientsPath = () => {
    const path = window.location.pathname;
    if (path.includes('/clients/oem')) {
      const oemSec = document.getElementById('oem');
      if (oemSec) {
        setTimeout(() => oemSec.scrollIntoView({ behavior: 'smooth' }), 300);
      }
    } else if (path.includes('/clients/customers')) {
      const custSec = document.getElementById('customers');
      if (custSec) {
        setTimeout(() => custSec.scrollIntoView({ behavior: 'smooth' }), 300);
      }
    }
  };

  // Run on page load
  handleGalleryPath();
  handleClientsPath();

  // --- LIGHTBOX GALLERY POPUP ---
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.querySelector('.lightbox-img');
  const lightboxCaption = document.querySelector('.lightbox-caption');
  const lightboxClose = document.querySelector('.lightbox-close');

  const openLightbox = (imgSrc, captionText) => {
    if (lightboxImg && lightbox) {
      lightboxImg.src = imgSrc;
      if (lightboxCaption) lightboxCaption.textContent = captionText;
      lightbox.classList.add('active');
    }
  };

  const closeLightbox = () => {
    if (lightbox) lightbox.classList.remove('active');
  };

  galleryItems.forEach(item => {
    item.addEventListener('click', () => {
      const img = item.querySelector('img');
      const caption = item.querySelector('h4').textContent;
      if (img) openLightbox(img.src, caption);
    });
  });

  if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
  if (lightbox) {
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox || e.target.classList.contains('lightbox-content')) {
        closeLightbox();
      }
    });
  }

  // --- CAREER RESUME UPLOAD HANDLER ---
  const resumeInput = document.getElementById('car-resume');
  const resumeDropzone = document.getElementById('resume-dropzone');
  // --- CAREER PAGE RESUME DROPZONE HANDLER ---
  const setupDropzone = (inputId, dropzoneId, badgeId, textId, removeBtnId) => {
    const rInput = document.getElementById(inputId);
    const rDropzone = document.getElementById(dropzoneId);
    const rBadge = document.getElementById(badgeId);
    const rText = document.getElementById(textId);
    const rRemove = document.getElementById(removeBtnId);

    if (rInput && rBadge && rText) {
      const handleFile = (file) => {
        if (file) {
          rText.textContent = `${file.name} (${(file.size / 1024).toFixed(1)} KB)`;
          rBadge.classList.add('active');
        }
      };

      rInput.addEventListener('change', (e) => {
        if (e.target.files && e.target.files[0]) {
          handleFile(e.target.files[0]);
        }
      });

      if (rDropzone) {
        ['dragenter', 'dragover'].forEach(ev => {
          rDropzone.addEventListener(ev, (e) => {
            e.preventDefault();
            rDropzone.classList.add('dragover');
          });
        });
        ['dragleave', 'drop'].forEach(ev => {
          rDropzone.addEventListener(ev, (e) => {
            e.preventDefault();
            rDropzone.classList.remove('dragover');
          });
        });
        rDropzone.addEventListener('drop', (e) => {
          if (e.dataTransfer.files && e.dataTransfer.files[0]) {
            rInput.files = e.dataTransfer.files;
            handleFile(e.dataTransfer.files[0]);
          }
        });
      }

      if (rRemove) {
        rRemove.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          rInput.value = '';
          rBadge.classList.remove('active');
        });
      }
    }
  };

  setupDropzone('car-resume', 'resume-dropzone', 'file-badge', 'file-name-text', 'file-remove-btn');
  setupDropzone('modal-car-resume', 'modal-resume-dropzone', 'modal-file-badge', 'modal-file-name-text', 'modal-file-remove-btn');

  // --- JOB CARD APPLY NOW BUTTON & MODAL CONTROLLER ---
  const jobApplyModal = document.getElementById('job-apply-modal');
  const jobApplyCloseBtn = document.getElementById('job-modal-close');
  const jobApplyButtons = document.querySelectorAll('.btn-apply-job');
  const jobModalPositionInput = document.getElementById('modal-car-position');
  const jobModalRoleBadge = document.getElementById('modal-role-badge');

  if (jobApplyButtons.length > 0 && jobApplyModal) {
    jobApplyButtons.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const role = btn.getAttribute('data-job-title') || 'General Application';
        const jobId = btn.getAttribute('data-job-id') || '';
        
        const jobIdInput = document.getElementById('modal-job-id');
        if (jobIdInput) jobIdInput.value = jobId;
        
        if (jobModalPositionInput) {
          jobModalPositionInput.value = role;
        }
        if (jobModalRoleBadge) {
          jobModalRoleBadge.textContent = role;
        }
        jobApplyModal.classList.add('active');
        document.body.style.overflow = 'hidden';
      });
    });

    const closeJobModal = () => {
      jobApplyModal.classList.remove('active');
      document.body.style.overflow = '';
    };

    if (jobApplyCloseBtn) {
      jobApplyCloseBtn.addEventListener('click', closeJobModal);
    }

    jobApplyModal.addEventListener('click', (e) => {
      if (e.target === jobApplyModal) {
        closeJobModal();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && jobApplyModal.classList.contains('active')) {
        closeJobModal();
      }
    });
  }

  // --- FORM VALIDATION & SUBMISSION HANDLERS ---
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      
      // Basic client validation
      let isValid = true;
      const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
      
      inputs.forEach(input => {
        if (!input.value.trim()) {
          isValid = false;
          input.style.borderColor = '#e3342f';
        } else {
          input.style.borderColor = '';
        }
      });

      if (isValid) {
        // Get values dynamically
        const nameInput = form.querySelector('[id$="name"]');
        const phoneInput = form.querySelector('[id$="phone"]');
        const locationInput = form.querySelector('[id$="location"]');
        const emailInput = form.querySelector('[id$="email"]');
        const enquiryInput = form.querySelector('[id$="enquiry"]');
        const messageInput = form.querySelector('[id$="message"]');

        const nameVal = nameInput ? nameInput.value.trim() : '';
        const phoneVal = phoneInput ? phoneInput.value.trim() : '';
        const locationVal = locationInput ? locationInput.value.trim() : '';
        const emailVal = emailInput ? emailInput.value.trim() : '';
        const enquiryVal = enquiryInput ? enquiryInput.value.trim() : '';
        const messageVal = messageInput ? messageInput.value.trim() : '';

        // Determine email display text
        const emailText = emailVal ? emailVal : 'Not Provided';

        // Construct Message
        let messageLines = [];
        if (form.id === 'careers-apply-form' || form.id === 'job-modal-apply-form') {
          const positionInput = form.querySelector('#car-position, #modal-car-position');
          const experienceInput = form.querySelector('#car-experience, #m-car-experience');
          const qualificationInput = form.querySelector('#car-qualification, #m-car-qualification');
          const companyInput = form.querySelector('#car-company');
          const fileInput = form.querySelector('input[type="file"]');
          const resumeFile = fileInput && fileInput.files && fileInput.files[0] ? `Attached (${fileInput.files[0].name})` : 'Will share on WhatsApp';

          messageLines = [
            `*📋 NEW JOB APPLICATION - MARKSMEN GROUP*`,
            `*Candidate Name:* ${nameVal}`,
            `*Mobile No:* ${phoneVal}`,
            `*Email:* ${emailText}`,
            `*Location:* ${locationVal}`,
            `*Position Applied:* ${positionInput ? positionInput.value : 'General Application'}`,
            `*Total Experience:* ${experienceInput ? experienceInput.value : 'Not Specified'}`,
            `*Highest Qualification:* ${qualificationInput && qualificationInput.value.trim() ? qualificationInput.value.trim() : 'Not Specified'}`,
            `*Resume/CV Status:* ${resumeFile}`
          ];
          if (companyInput && companyInput.value.trim()) {
            messageLines.push(`*Current/Previous Role:* ${companyInput.value.trim()}`);
          }
          if (messageVal) {
            messageLines.push(`*Key Skills / Note:* ${messageVal}`);
          }
        } else {
          messageLines = [
            `*Name:* ${nameVal}`,
            `*Mobile No:* ${phoneVal}`,
            `*Location:* ${locationVal}`,
            `*Email:* ${emailText}`,
            `*Product/Enquiry:* ${enquiryVal}`
          ];
          if (messageVal) {
            messageLines.push(`*Message/Requirement:* ${messageVal}`);
          }
        }

        const formattedMessage = messageLines.join('\n');
        const encodedMessage = encodeURIComponent(formattedMessage);
        
        // Target WhatsApp Number
        const whatsappNumber = '919893911155';
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

        // Send to Backend Database
        let endpoint = null;
        let payload = {};

        if (form.id === 'contact-write-form') {
          endpoint = '/contact-enquiry';
          payload = {
            name: nameVal,
            mobile_number: phoneVal,
            location: locationVal,
            email: emailVal,
            product_enquiry: enquiryVal,
            message: messageVal
          };
        } else if (form.id === 'modal-callback-form' || form.id === 'product-enquiry-form') {
          endpoint = '/product-enquiry';
          payload = {
            name: nameVal,
            mobile_number: phoneVal,
            project_location: locationVal,
            email: emailVal,
            product_portfolio: enquiryVal,
            requirements: messageVal
          };
        } else if (form.id === 'careers-apply-form' || form.id === 'job-modal-apply-form') {
          endpoint = '/career-enquiry';
          const fileInput = form.querySelector('input[type="file"]');
          
          payload = new FormData();
          const positionInput = form.querySelector('#car-position, #modal-car-position');
          const experienceInput = form.querySelector('#car-experience, #m-car-experience');
          const qualificationInput = form.querySelector('#car-qualification, #m-car-qualification');
          const jobIdInput = form.querySelector('#modal-job-id'); // We'll need to add this hidden field
          
          if (jobIdInput && jobIdInput.value) {
             payload.append('job_opening_id', jobIdInput.value);
          }
          payload.append('full_name', nameVal);
          payload.append('mobile_number', phoneVal);
          payload.append('current_city', locationVal);
          payload.append('email', emailVal);
          payload.append('total_experience', experienceInput ? experienceInput.value : '');
          payload.append('highest_qualification', qualificationInput ? qualificationInput.value : '');
          payload.append('brief_note', messageVal);
          
          if (fileInput && fileInput.files && fileInput.files[0]) {
             payload.append('resume', fileInput.files[0]);
          }
        }

        if (endpoint) {
          const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
          
          let fetchOptions = {
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': csrfToken
            }
          };

          if (payload instanceof FormData) {
            fetchOptions.body = payload;
            fetchOptions.headers['Accept'] = 'application/json';
          } else {
            fetchOptions.headers['Content-Type'] = 'application/json';
            fetchOptions.headers['Accept'] = 'application/json';
            fetchOptions.body = JSON.stringify(payload);
          }

          fetch(endpoint, fetchOptions)
            .then(response => {
                if (!response.ok) {
                    response.text().then(text => alert('Server Error: ' + response.status + ' - ' + text.substring(0, 100)));
                } else {
                    response.json().then(data => {
                        if (!data.success) {
                            alert('Application failed: ' + JSON.stringify(data.errors || data.message));
                        }
                    });
                }
            })
            .catch(err => alert('Network Error saving to DB: ' + err));
        }

        // Show success visual feedback
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Application Submitted!';
        submitBtn.style.backgroundColor = '#25D366';
        submitBtn.style.borderColor = '#25D366';
        submitBtn.style.color = '#fff';

        // Reset form
        setTimeout(() => {
          form.reset();
          const activeBadges = form.querySelectorAll('.file-selected-badge');
          activeBadges.forEach(b => b.classList.remove('active'));
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
          submitBtn.style.backgroundColor = '';
          submitBtn.style.borderColor = '';
          submitBtn.style.color = '';
          closeModal();
          if (jobApplyModal) {
            jobApplyModal.classList.remove('active');
            document.body.style.overflow = '';
          }
        }, 2000);
      }
    });
  });

  // --- HOMEPAGE PRODUCT TABS ---
  const productTabs = document.querySelectorAll('.product-tab-btn');
  const productBoxes = document.querySelectorAll('.product-tab-box');

  productTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      // Deactivate all tabs
      productTabs.forEach(t => t.classList.remove('active'));
      // Activate clicked tab
      tab.classList.add('active');

      const targetId = tab.getAttribute('data-tab');

      // Hide all content boxes
      productBoxes.forEach(box => {
        box.classList.remove('active');
      });

      // Show target content box
      const targetBox = document.getElementById(targetId);
      if (targetBox) {
        targetBox.classList.add('active');
      }
    });
  });

  // --- HOMEPAGE YOUTUBE VIDEO POPUP HANDLER (CENTER ZOOM IN & ZOOM OUT) ---
  const playBtns = document.querySelectorAll('.video-play-btn');
  const videoModal = document.getElementById('testimonial-video-modal');
  const videoIframe = document.getElementById('video-iframe');
  const videoCloseBtn = document.querySelector('.video-modal-close');
  const videoBackdrop = document.querySelector('.video-modal-backdrop');

  let isVideoClosing = false;

  const openVideo = (videoId) => {
    if (!videoModal || !videoIframe || isVideoClosing) return;

    // Ensure only 1 video plays at a time: stop previous playback
    videoIframe.src = '';

    // Load selected YouTube video with autoplay and clean controls
    videoIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&enablejsapi=1`;

    videoModal.classList.remove('closing');
    videoModal.classList.add('active');
    videoModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  };

  const closeVideo = () => {
    if (!videoModal || !videoModal.classList.contains('active') || isVideoClosing) return;

    isVideoClosing = true;
    videoModal.classList.add('closing');

    // Smooth Zoom Out animation before hiding and stopping playback
    setTimeout(() => {
      videoModal.classList.remove('active', 'closing');
      videoModal.setAttribute('aria-hidden', 'true');
      if (videoIframe) {
        videoIframe.src = ''; // Stops video playback completely
      }
      document.body.style.overflow = '';
      isVideoClosing = false;
    }, 280);
  };

  playBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      const videoId = btn.getAttribute('data-video-id');
      if (!videoId) return;

      openVideo(videoId);
    });
  });

  if (videoCloseBtn) {
    videoCloseBtn.addEventListener('click', (e) => {
      e.preventDefault();
      closeVideo();
    });
  }

  if (videoBackdrop) {
    videoBackdrop.addEventListener('click', (e) => {
      e.preventDefault();
      closeVideo();
    });
  }

  // Escape key closes modal and stops video
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && videoModal && videoModal.classList.contains('active')) {
      closeVideo();
    }
  });
});

// Mobile Sub Menu Toggle
const subToggle = document.querySelector('.mobile-sub-toggle');
const subMenu = document.querySelector('.mobile-sub-menu');
if(subToggle && subMenu) {
  subToggle.addEventListener('click', function(e) {
    e.preventDefault();
    if(subMenu.style.display === 'none' || subMenu.style.display === '') {
      subMenu.style.display = 'flex';
      subToggle.style.transform = 'rotate(180deg)';
    } else {
      subMenu.style.display = 'none';
      subToggle.style.transform = 'rotate(0deg)';
    }
  });
}
