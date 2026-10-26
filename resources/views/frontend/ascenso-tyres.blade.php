@extends('frontend.layout.main')

@section('title', 'Ascenso OTR & Off-Road Tyres - Marksmen Group')

@push('styles')
<style>
    .ascenso-slider-wrap {
      max-width: 1200px !important; margin: 0 auto !important; display: flex; align-items: center; justify-content: space-between; padding: 0 15px !important; width: 100%;
    }
    .ascenso-slider-l {
      flex: 0 0 550px !important; width: 550px !important; padding-top: 50px;
    }
    .ascenso-slider-r {
      flex: 0 0 560px !important; width: 560px !important; display: flex; gap: 10px; height: 450px;
    }
    #ascenso-accordion .acc-panel {
      flex: 0 0 50px !important; min-width: 0 !important; width: 50px !important;
    }
    #ascenso-accordion .acc-panel.active {
      flex: 0 1 320px !important; min-width: 0 !important; width: 320px !important;
    }
    @media(max-width: 991px) {
      .ascenso-slider-wrap {
        flex-direction: column; padding-top: 20px; gap: 40px;
      }
      .ascenso-slider-l {
        flex: 1 1 auto; max-width: 100%; padding-top: 0; text-align: center;
      }
      .ascenso-slider-r {
        flex: 1 1 auto; max-width: 100%; width: 100%; height: 600px; flex-direction: column; justify-content: flex-start;
      }
      #ascenso-accordion .acc-panel {
        flex: 0 0 75px !important; min-width: 0 !important; width: 100% !important;
      }
      #ascenso-accordion .acc-panel.active {
        flex: 1 !important; min-height: 200px !important; width: 100% !important;
      }
      #ascenso-accordion .acc-title-vertical {
        writing-mode: horizontal-tb !important; transform: none !important;
        justify-content: center !important; align-items: flex-end !important;
        padding-bottom: 20px !important;
      }
      #ascenso-accordion .acc-title-horizontal {
        bottom: 20px !important;
      }
    }

    .achiever-card {
      flex: 0 0 calc(25% - 18.75px) !important;
      max-width: calc(25% - 18.75px) !important;
      min-width: 0 !important;
      box-sizing: border-box !important;
      transition: box-shadow 0.3s;
    }
    @media (max-width: 1024px) {
      .achiever-card {
        flex: 0 0 calc(50% - 12.5px) !important;
        max-width: calc(50% - 12.5px) !important;
      }
    }
    @media (max-width: 768px) {
      .achiever-card {
        flex: 0 0 100% !important;
        max-width: 100% !important;
      }
    }
    .achiever-card:hover {
      box-shadow: 0 10px 20px rgba(241, 90, 34, 0.15);
    }
    .achiever-card:hover .ach-img {
      transform: scale(1.05);
    }
    .achiever-card {
      display: flex !important;
      flex-direction: column !important;
      justify-content: space-between !important;
    }
    .btn-enquire-tyre {
      margin-top: 15px;
      width: 100%;
      padding: 10px 14px;
      background: #f15a22;
      color: #fff;
      border: 1px solid #f15a22;
      border-radius: 6px;
      font-weight: 700;
      font-size: 0.88rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: all 0.25s ease;
      box-shadow: 0 2px 6px rgba(241, 90, 34, 0.2);
    }
    .btn-enquire-tyre:hover {
      background: #d64914;
      border-color: #d64914;
      transform: translateY(-2px);
      box-shadow: 0 5px 12px rgba(241, 90, 34, 0.35);
    }
    .acc-panel img {
      transition: transform 0.5s ease;
    }
    .acc-panel:hover img {
      transform: scale(1.05);
    }
</style>
@endpush

@section('content')
  <!-- ASCENSO TYRES PRODUCT BANNER -->
  <section class="ascenso-banner" style="position: relative; width: 100%; height: 450px; display: flex; align-items: center; overflow: hidden; background: var(--primary);">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
      <img src="{{ asset('frontend/assets/images/ascenso_banner.png') }}" alt="Ascenso Tyres Banner" style="width: 100%; height: 100%; object-fit: cover; object-position: right center;">
    </div>
    <!-- Dark gradient overlay from left -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, rgba(29, 42, 58, 0.95) 0%, rgba(29, 42, 58, 0.8) 40%, rgba(29, 42, 58, 0.2) 100%); z-index: 2;"></div>

    <div class="container" style="position: relative; z-index: 3; padding: 0 1.5rem; max-width: 1200px;">
      
      <!-- Gold Pill Tag -->
      <div style="display: inline-block; border: 1px solid var(--accent); background: rgba(203, 162, 51, 0.1); color: var(--accent); padding: 8px 16px; border-radius: 30px; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 20px;">
        <i class="fa-solid fa-layer-group" style="margin-right: 6px;"></i> Ascenso OTR & Off-Road Tyres
      </div>

      <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: 800; margin-bottom: 1rem; text-transform: none; letter-spacing: -0.5px; line-height: 1.1; color: white;">
        Mining & Earthmoving <br><span style="color: var(--accent);">Premium Tyres</span>
      </h1>
      
      <p style="font-size: 1.15rem; font-weight: 500; margin-bottom: 2rem; color: #e0e6ed; max-width: 600px; line-height: 1.6;">
        Developed for the most demanding mining and earthmoving applications. Supplying state-of-the-art radial and bias tyres.
      </p>
      
    </div>

    <a href="{{ url('/contact') }}" style="position: absolute; right: 0; top: 50%; transform: translateY(-50%); background-color: var(--accent); color: var(--primary); padding: 15px 5px; writing-mode: vertical-rl; text-orientation: mixed; z-index: 4; font-weight: 800; letter-spacing: 2px; text-transform: uppercase; font-size: 0.85rem; text-decoration: none;">ENQUIRY</a>
  </section>

  <!-- ASCENSO TYRES BUSINESS SECTION (From Brief) -->
  <section class="section-padding" style="background-color: var(--bg-light);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">About Ascenso</span>
        <h2 class="section-title">Authorized Ascenso Tyres <span>Distributor</span></h2>
        <p class="section-subtitle">Marksmen Automobiles Pvt. Ltd. is an authorized distributor of Ascenso Tyres for Madhya Pradesh. Ascenso offers a wide range of tyres designed for demanding applications across agriculture, construction, earthmoving and off-road operations.</p>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-circle-dot" style="color: var(--accent); margin-right: 8px;"></i> Product Categories</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Agricultural Tyres</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> OTR Tyres</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Construction Tyres</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Industrial Tyres</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Earthmoving Tyres</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Specialty Application Tyres</li>
          </ul>
        </div>
        

        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-headset" style="color: var(--accent); margin-right: 8px;"></i> Our Services</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Product selection assistance</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Tyre application guidance</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Dealer and customer support</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> After-sales assistance & Replacement support</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Technical guidance</li>
          </ul>
        </div>

      </div>
      
      <div style="text-align: center; margin-bottom: 2rem;">
        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">Key USP & Territory</h3>
        <p style="font-size: 1.1rem; color: #555; max-width: 800px; margin: 0 auto;">Application-focused tyre solutions for demanding Indian operating conditions.<br><strong>Authorized Distributor – Madhya Pradesh</strong></p>
      </div>

      <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
        <span class="btn btn-primary" style="cursor: default;">Explore Ascenso Tyres</span>
        <a href="#star-products" class="btn btn-secondary">Find the Right Tyre</a>
        <a href="{{ url('/contact?product=Ascenso+Tyres') }}" class="btn btn-outline btn-enquire" data-product-name="Ascenso Tyres">Enquire Now</a>
      </div>
    </div>
  </section>

<section style="background-color: #fff; margin-bottom: 20px; padding: 60px 0;">
  <div id="vtab-parent-container" class="container" style="max-width: 1300px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: stretch; min-height: 500px; flex-wrap: wrap;">
    
    <!-- Left Content (Image & Text) -->
    <div id="vtab-content-container" style="flex: 0 0 45%; max-width: 550px; display: flex; flex-direction: column; justify-content: flex-start; transition: opacity 0.3s ease;">
      <img id="vtab-img" src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 350px; object-fit: cover; border-radius: 12px; margin-bottom: 30px;">
      <h2 id="vtab-title" style="color: #f15a22; font-size: 1.4rem; font-weight: 700; text-transform: uppercase; margin-bottom: 20px; line-height: 1.3;">WE NEVER STOPPED RISING: THE ASCENSO STORY.</h2>
      <p id="vtab-text" style="color: #4a4a4a; font-size: 1rem; line-height: 1.7; margin-bottom: 30px;">After building two global giants in the off-highway tyre segment, the illustrious Mahansaria family created Ascenso, its third off-highway tyre manufacturing brand.</p>

    </div>

    <!-- Right Tabs (Lines & Rotated Text) -->
    <div id="vtab-tabs-container" style="flex: 0 0 45%; display: flex; justify-content: space-between; margin-left: 50px;">
      <!-- JavaScript will inject tabs here -->
    </div>

  </div>
</section>

<!-- ORANGE STATS BANNER -->
  <section style="background-color: #f15a22; color: #1a1a1a; padding: 20px 0; margin-bottom: 20px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 20px;">
      
      <div style="display: flex; align-items: center; gap: 20px;">
        <i class="fa-solid fa-users" style="font-size: 3rem;"></i>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; line-height: 1.1;">2500+</div>
          <div style="font-size: 1.1rem; font-weight: 600;">Workforce</div>
        </div>
      </div>

      <div style="display: flex; align-items: center; gap: 20px;">
        <i class="fa-solid fa-earth-americas" style="font-size: 3rem;"></i>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; line-height: 1.1;">100+</div>
          <div style="font-size: 1.1rem; font-weight: 600;">Countries</div>
        </div>
      </div>

      <div style="display: flex; align-items: center; gap: 20px;">
        <i class="fa-solid fa-chart-line" style="font-size: 3rem;"></i>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; line-height: 1.1;">1000+</div>
          <div style="font-size: 1.1rem; font-weight: 600;">SKUs</div>
        </div>
      </div>

    </div>
  </section>

  <!-- ACCORDION SLIDER SECTION -->
  <section style="padding: 20px 0; margin-bottom: 20px; background-color: #fff;">
    <div class="container ascenso-slider-wrap">
      
      <!-- Left Content -->
      <div class="ascenso-slider-l">
        <h2 style="color: #f15a22; font-size: 2.2rem; font-weight: 700; margin-bottom: 25px; line-height: 1.2; text-transform: uppercase;">MANY TYRES. ONE ASCENSO.</h2>
        <p style="color: #4a4a4a; font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px; padding-right: 20px;">
          We manufacture over 1000+ SKUs across the industrial and construction, material handling, earth mover, and forestry segments.
        </p>

      </div>

      <!-- Right Accordion -->
      <div class="ascenso-slider-r" id="ascenso-accordion">
        
        <!-- Panel 1 (Industrial & Construction) -->
        <div class="acc-panel active" style="position: relative; border-radius: 12px; overflow: hidden; cursor: pointer; transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1); flex: 1; min-width: 45px;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" alt="Industrial & Construction" style="width: 100%; height: 100%; object-fit: cover; background: #e0e0e0;">
          <div class="acc-overlay" style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(200, 60, 20, 0.85) 0%, transparent 60%); transition: background 0.5s;"></div>
          <div class="acc-title-vertical" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; writing-mode: vertical-rl; transform: rotate(180deg); display: flex; justify-content: flex-end; align-items: center; padding-bottom: 30px; color: #fff; font-weight: 700; font-size: 1.3rem; transition: opacity 0.3s; opacity: 0; white-space: nowrap;">Industrial & Construction</div>
          <div class="acc-title-horizontal" style="position: absolute; bottom: 30px; left: 0; width: 100%; text-align: center; color: #fff; font-weight: 700; font-size: 1.5rem; transition: opacity 0.3s; opacity: 1;">Industrial & Construction</div>
        </div>
        
        <!-- Panel 2 (Material Handling) -->
        <div class="acc-panel" style="position: relative; border-radius: 12px; overflow: hidden; cursor: pointer; transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1); flex: 0 0 50px; min-width: 45px;">
          <img src="https://magnatyres.com/wp-content/uploads/2024/03/mr400-350x350.png.webp" alt="Material Handling" style="width: 100%; height: 100%; object-fit: cover; background: #d0d0d0;">
          <div class="acc-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.5); transition: background 0.5s;"></div>
          <div class="acc-title-vertical" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; writing-mode: vertical-rl; transform: rotate(180deg); display: flex; justify-content: flex-end; align-items: center; padding-bottom: 30px; color: #fff; font-weight: 700; font-size: 1.3rem; transition: opacity 0.3s; opacity: 1; white-space: nowrap;">Material Handling</div>
          <div class="acc-title-horizontal" style="position: absolute; bottom: 30px; left: 0; width: 100%; text-align: center; color: #fff; font-weight: 700; font-size: 1.5rem; transition: opacity 0.3s; opacity: 0;">Material Handling</div>
        </div>

        <!-- Panel 3 (Earth Mover) -->
        <div class="acc-panel" style="position: relative; border-radius: 12px; overflow: hidden; cursor: pointer; transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1); flex: 0 0 50px; min-width: 45px;">
          <img src="https://magnatyres.com/wp-content/uploads/2024/03/mb720-350x350.png.webp" alt="Earth Mover" style="width: 100%; height: 100%; object-fit: cover; background: #e0e0e0;">
          <div class="acc-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.5); transition: background 0.5s;"></div>
          <div class="acc-title-vertical" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; writing-mode: vertical-rl; transform: rotate(180deg); display: flex; justify-content: flex-end; align-items: center; padding-bottom: 30px; color: #fff; font-weight: 700; font-size: 1.3rem; transition: opacity 0.3s; opacity: 1; white-space: nowrap;">Earth Mover</div>
          <div class="acc-title-horizontal" style="position: absolute; bottom: 30px; left: 0; width: 100%; text-align: center; color: #fff; font-weight: 700; font-size: 1.5rem; transition: opacity 0.3s; opacity: 0;">Earth Mover</div>
        </div>

        <!-- Panel 4 (Forestry) -->
        <div class="acc-panel" style="position: relative; border-radius: 12px; overflow: hidden; cursor: pointer; transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1); flex: 0 0 50px; min-width: 45px;">
          <img src="https://magnatyres.com/wp-content/uploads/2024/03/m-skid4-350x350.png.webp" alt="Forestry" style="width: 100%; height: 100%; object-fit: cover; background: #d0d0d0;">
          <div class="acc-overlay" style="position: absolute; inset: 0; background: rgba(0,0,0,0.5); transition: background 0.5s;"></div>
          <div class="acc-title-vertical" style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; writing-mode: vertical-rl; transform: rotate(180deg); display: flex; justify-content: flex-end; align-items: center; padding-bottom: 30px; color: #fff; font-weight: 700; font-size: 1.3rem; transition: opacity 0.3s; opacity: 1; white-space: nowrap;">Forestry</div>
          <div class="acc-title-horizontal" style="position: absolute; bottom: 30px; left: 0; width: 100%; text-align: center; color: #fff; font-weight: 700; font-size: 1.5rem; transition: opacity 0.3s; opacity: 0;">Forestry</div>
        </div>

      </div>
    </div>
  </section>

  <!-- PRODUCT SLIDER SECTION -->
  <section id="star-products" style="padding: 20px 0; margin-bottom: 20px; background-color: #fff; overflow: hidden;">
    <div class="container" style="max-width: 1300px; margin: 0 auto; padding: 0 20px;">
      
      <div style="margin-bottom: 40px;">
        <h2 style="color: #f15a22; font-size: 1.8rem; font-weight: 700; margin-bottom: 15px; line-height: 1.2; text-transform: uppercase;">THE ASCENSO ACHIEVERS: AN ODE TO OUR STAR PRODUCTS.</h2>
        <p style="color: #4a4a4a; font-size: 1.1rem;">Built for the bold, our star products are the silent heroes driving machines and redefining industries.</p>
      </div>

      <!-- Slider Wrapper -->
      <div style="position: relative; width: 100%;">
        
        <!-- Viewport Container (Clips overflowing cards so left and right spaces match container perfectly) -->
        <div style="overflow: hidden; width: 100%; border-radius: 8px; padding: 6px 0;">
          <div id="ascenso-product-track" style="display: flex; gap: 25px; transition: transform 0.5s ease; width: 100%;">
            @forelse($products ?? [] as $product)
            <div class="achiever-card" style="flex: 0 0 calc(25% - 18.75px); background: #fff; border: 1px solid #f15a22; border-radius: 8px; padding: 25px 25px 25px; position: relative;">
              <div>
                <div style="position: absolute; top: -1px; left: -1px; background: #f15a22; color: #fff; padding: 4px 15px; border-radius: 8px 0 8px 0; font-size: 0.8rem; font-weight: 700;">New</div>
                <img src="{{ $product->image ? asset('uploads/' . $product->image) : asset('frontend/assets/images/ascenso_product.png') }}" alt="{{ $product->name }}" style="width: 100%; height: 200px; object-fit: contain; margin-bottom: 15px; transition: transform 0.3s;" class="ach-img">
                <h3 style="font-size: 1.35rem; color: #333; margin-bottom: 5px; font-weight: 800;">{{ $product->name }}</h3>
                @if(is_array($product->specifications) && count($product->specifications) > 0)
                <div style="color: #f15a22; font-size: 0.85rem; font-weight: 500; margin-bottom: 10px;">{{ implode(' | ', $product->specifications) }}</div>
                @endif
                <p style="color: #666; font-size: 0.85rem; line-height: 1.4; margin-bottom: 0;">{{ \Illuminate\Support\Str::limit($product->description, 60) }}</p>
              </div>
              <button type="button" class="btn-product-enquire btn-enquire-tyre" data-product-name="Ascenso Tyres - {{ $product->name }}">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>
            @empty
            <!-- Product Card 1 -->
            <div class="achiever-card" style="flex: 0 0 calc(25% - 18.75px); background: #fff; border: 1px solid #f15a22; border-radius: 8px; padding: 25px 25px 25px; position: relative;">
              <div>
                <div style="position: absolute; top: -1px; left: -1px; background: #f15a22; color: #fff; padding: 4px 15px; border-radius: 8px 0 8px 0; font-size: 0.8rem; font-weight: 700;">New</div>
                <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" alt="Tyre" style="width: 100%; height: 200px; object-fit: contain; margin-bottom: 15px; transition: transform 0.3s;" class="ach-img">
                <h3 style="font-size: 1.35rem; color: #333; margin-bottom: 5px; font-weight: 800;">FFB 842</h3>
                <div style="color: #f15a22; font-size: 0.85rem; font-weight: 500; margin-bottom: 10px;">Bias | LS-2 | TL</div>
                <p style="color: #666; font-size: 0.85rem; line-height: 1.4; margin-bottom: 0;">Tyre for Forestry | Forestry forwarder Bias 842 which is...</p>
              </div>
              <button type="button" class="btn-product-enquire btn-enquire-tyre" data-product-name="Ascenso Tyres - FFB 842">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>

            <!-- Product Card 2 -->
            <div class="achiever-card" style="flex: 0 0 calc(25% - 18.75px); background: #fff; border: 1px solid #f15a22; border-radius: 8px; padding: 25px 25px 25px; position: relative;">
              <div>
                <div style="position: absolute; top: -1px; left: -1px; background: #f15a22; color: #fff; padding: 4px 15px; border-radius: 8px 0 8px 0; font-size: 0.8rem; font-weight: 700;">New</div>
                <img src="https://magnatyres.com/wp-content/uploads/2024/03/m-skid4-350x350.png.webp" alt="Tyre" style="width: 100%; height: 200px; object-fit: contain; margin-bottom: 15px; transition: transform 0.3s;" class="ach-img">
                <h3 style="font-size: 1.35rem; color: #333; margin-bottom: 5px; font-weight: 800;">FLS 692</h3>
                <div style="color: #f15a22; font-size: 0.85rem; font-weight: 500; margin-bottom: 10px;">Solid ||</div>
                <p style="color: #666; font-size: 0.85rem; line-height: 1.4; margin-bottom: 0;">Tyre for Material Handling | Forklift Solid FLS 692- Deli...</p>
              </div>
              <button type="button" class="btn-product-enquire btn-enquire-tyre" data-product-name="Ascenso Tyres - FLS 692">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>

            <!-- Product Card 3 -->
            <div class="achiever-card" style="flex: 0 0 calc(25% - 18.75px); background: #fff; border: 1px solid #f15a22; border-radius: 8px; padding: 25px 25px 25px; position: relative;">
              <div>
                <div style="position: absolute; top: -1px; left: -1px; background: #f15a22; color: #fff; padding: 4px 15px; border-radius: 8px 0 8px 0; font-size: 0.8rem; font-weight: 700;">New</div>
                <img src="https://magnatyres.com/wp-content/uploads/2024/03/mr400-350x350.png.webp" alt="Tyre" style="width: 100%; height: 200px; object-fit: contain; margin-bottom: 15px; transition: transform 0.3s;" class="ach-img">
                <h3 style="font-size: 1.35rem; color: #333; margin-bottom: 5px; font-weight: 800;">VDR 900</h3>
                <div style="color: #f15a22; font-size: 0.85rem; font-weight: 500; margin-bottom: 10px;">Radial | R-1W | TL</div>
                <p style="color: #666; font-size: 0.85rem; line-height: 1.4; margin-bottom: 0;">Tyre for Agriculture | VF Drive Radial 900, specially desi...</p>
              </div>
              <button type="button" class="btn-product-enquire btn-enquire-tyre" data-product-name="Ascenso Tyres - VDR 900">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>

            <!-- Product Card 4 -->
            <div class="achiever-card" style="flex: 0 0 calc(25% - 18.75px); background: #fff; border: 1px solid #f15a22; border-radius: 8px; padding: 25px 25px 25px; position: relative;">
              <div>
                <img src="https://magnatyres.com/wp-content/uploads/2024/03/mr500-350x350.png.webp" alt="Tyre" style="width: 100%; height: 200px; object-fit: contain; margin-bottom: 15px; transition: transform 0.3s;" class="ach-img">
                <h3 style="font-size: 1.35rem; color: #333; margin-bottom: 5px; font-weight: 800;">VDR 2000</h3>
                <div style="color: #f15a22; font-size: 0.85rem; font-weight: 500; margin-bottom: 10px;">Radial | R-1W | TL</div>
                <p style="color: #666; font-size: 0.85rem; line-height: 1.4; margin-bottom: 0;">Tyre for Agriculture | High traction pattern</p>
              </div>
              <button type="button" class="btn-product-enquire btn-enquire-tyre" data-product-name="Ascenso Tyres - VDR 2000">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>

            <!-- Product Card 5 -->
            <div class="achiever-card" style="flex: 0 0 calc(25% - 18.75px); background: #fff; border: 1px solid #f15a22; border-radius: 8px; padding: 25px 25px 25px; position: relative;">
              <div>
                <div style="position: absolute; top: -1px; left: -1px; background: #f15a22; color: #fff; padding: 4px 15px; border-radius: 8px 0 8px 0; font-size: 0.8rem; font-weight: 700;">New</div>
                <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" alt="Tyre" style="width: 100%; height: 200px; object-fit: contain; margin-bottom: 15px; transition: transform 0.3s;" class="ach-img">
                <h3 style="font-size: 1.35rem; color: #333; margin-bottom: 5px; font-weight: 800;">IMB 161</h3>
                <div style="color: #f15a22; font-size: 0.85rem; font-weight: 500; margin-bottom: 10px;">Bias | I-2 | TL</div>
                <p style="color: #666; font-size: 0.85rem; line-height: 1.4; margin-bottom: 0;">Tyre for Implement | Highly durable design for...</p>
              </div>
              <button type="button" class="btn-product-enquire btn-enquire-tyre" data-product-name="Ascenso Tyres - IMB 161">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>

            <!-- Product Card 6 -->
            <div class="achiever-card" style="flex: 0 0 calc(25% - 18.75px); background: #fff; border: 1px solid #f15a22; border-radius: 8px; padding: 25px 25px 25px; position: relative;">
              <div>
                <img src="https://magnatyres.com/wp-content/uploads/2024/03/m-skid4-350x350.png.webp" alt="Tyre" style="width: 100%; height: 200px; object-fit: contain; margin-bottom: 15px; transition: transform 0.3s;" class="ach-img">
                <h3 style="font-size: 1.35rem; color: #333; margin-bottom: 5px; font-weight: 800;">EXV 400</h3>
                <div style="color: #f15a22; font-size: 0.85rem; font-weight: 500; margin-bottom: 10px;">Bias | E-3 | TL</div>
                <p style="color: #666; font-size: 0.85rem; line-height: 1.4; margin-bottom: 0;">Tyre for Earthmovers | Specialized for rocky terrain...</p>
              </div>
              <button type="button" class="btn-product-enquire btn-enquire-tyre" data-product-name="Ascenso Tyres - EXV 400">
                <i class="fa-solid fa-paper-plane"></i> Inquire Now
              </button>
            </div>

          @endforelse
          </div>
        </div>

        <!-- Slider Controls / Scrollbar -->
        <div style="margin-top: 40px; padding: 0 10px; display: flex; align-items: center; justify-content: space-between; gap: 20px;">
          
          <button id="achvr-prev" style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid #ccc; background: #e0e0e0; color: #999; display: flex; align-items: center; justify-content: center; cursor: pointer; flex-shrink: 0;"><i class="fa-solid fa-chevron-left"></i></button>
          
          <div style="flex-grow: 1; height: 3px; background: #e0e0e0; position: relative;">
            <div id="achvr-progress" style="position: absolute; top: 0; left: 0; height: 100%; width: 25%; background: #f15a22; transition: all 0.3s ease;"></div>
          </div>

          <button id="achvr-next" style="width: 40px; height: 40px; border-radius: 50%; border: 1px solid #f15a22; background: #fff; color: #f15a22; display: flex; align-items: center; justify-content: center; cursor: pointer; flex-shrink: 0;"><i class="fa-solid fa-chevron-right"></i></button>
          
        </div>

      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
<section style="background-color: #fff; margin-bottom: 20px; padding: 20px 0;">
  <div class="container" style="max-width: 1300px; margin: 0 auto; padding: 0 20px; position: relative;">
    
    <!-- Top Controls -->
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 40px; gap: 15px;">
        <button id="testim-prev" style="width: 35px; height: 35px; border-radius: 50%; border: 1px solid #f15a22; background: #fff; color: #f15a22; cursor: pointer; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><i class="fa-solid fa-chevron-left"></i></button>
        <div style="flex: 1; height: 2px; background: #e0e0e0; position: relative;">
            <div id="testim-progress" style="position: absolute; top: 0; left: 0; width: 33.33%; height: 100%; background: #f15a22; transition: all 0.3s ease;"></div>
        </div>
        <button id="testim-next" style="width: 35px; height: 35px; border-radius: 50%; border: 1px solid #f15a22; background: #fff; color: #f15a22; cursor: pointer; display: flex; align-items: center; justify-content: center; flex-shrink: 0;"><i class="fa-solid fa-chevron-right"></i></button>
    </div>

    <div style="overflow: hidden; width: 100%;">
      <div id="ascenso-testim-track" style="display: flex; flex-wrap: nowrap; gap: 40px; transition: transform 0.5s ease; width: 100%;">
        
        <!-- Card 1 -->
        <div class="testim-card" style="flex: 0 0 calc(50% - 20px); min-width: 400px; display: flex; align-items: center; justify-content: space-between; gap: 30px;">
          <div style="flex: 1; padding-right: 20px;">
            <p style="color: #4a4a4a; font-size: 1.15rem; line-height: 1.7; margin-bottom: 40px;">"We've been in some pretty tough conditions with them and haven't seen much damage, so we've been really pleased with the tyres so far."</p>
            <h4 style="color: #f15a22; font-size: 1.15rem; font-weight: 700; margin-bottom: 25px;">John D Unruh (Peabody, Kansas)</h4>
          </div>
          <div style="flex: 1; position: relative;">
            <div style="border: 5px solid #1a1a1a; border-radius: 12px; padding: 15px; background: #fff;">
                <div style="border: 1px solid #f15a22; display: flex; flex-direction: column; align-items: center; padding: 15px 15px 0;">
                    <div style="color: #f15a22; font-weight: 900; font-size: 1.2rem; font-style: italic; margin-bottom: 10px;">
                        <i class="fa-solid fa-angle-up" style="font-size: 0.8rem;"></i><i class="fa-solid fa-angle-up" style="font-size: 0.8rem;"></i> ASCENSO
                    </div>
                    <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" alt="Testimonial 1" style="width: 100%; height: 320px; object-fit: cover; display: block; margin-bottom: -1px;">
                </div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="testim-card" style="flex: 0 0 calc(50% - 20px); min-width: 400px; display: flex; align-items: center; justify-content: space-between; gap: 30px;">
          <div style="flex: 1; padding-right: 20px;">
            <p style="color: #4a4a4a; font-size: 1.15rem; line-height: 1.7; margin-bottom: 40px;">"For the three-month trial that we've had these, I've definitely noticed the difference in smoothness. It doesn't hop as much as I'd expect an R1 to hop. All in all, I like the tyres a lot."</p>
            <h4 style="color: #f15a22; font-size: 1.15rem; font-weight: 700; margin-bottom: 25px;">The MDR 1000</h4>
          </div>
          <div style="flex: 1; position: relative;">
            <div style="border: 5px solid #1a1a1a; border-radius: 12px; padding: 15px; background: #fff;">
                <div style="border: 1px solid #f15a22; display: flex; flex-direction: column; align-items: center; padding: 15px 15px 0;">
                    <div style="color: #f15a22; font-weight: 900; font-size: 1.2rem; font-style: italic; margin-bottom: 10px;">
                        <i class="fa-solid fa-angle-up" style="font-size: 0.8rem;"></i><i class="fa-solid fa-angle-up" style="font-size: 0.8rem;"></i> ASCENSO
                    </div>
                    <img src="{{ asset('frontend/assets/images/ascenso_product.jpg') }}" alt="Testimonial 2" style="width: 100%; height: 320px; object-fit: cover; display: block; margin-bottom: -1px;">
                </div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="testim-card" style="flex: 0 0 calc(50% - 20px); min-width: 400px; display: flex; align-items: center; justify-content: space-between; gap: 30px;">
          <div style="flex: 1; padding-right: 20px;">
            <p style="color: #4a4a4a; font-size: 1.15rem; line-height: 1.7; margin-bottom: 40px;">"Excellent traction and reliability in our field operations. Ascenso has truly delivered a game-changer for our daily requirements."</p>
            <h4 style="color: #f15a22; font-size: 1.15rem; font-weight: 700; margin-bottom: 25px;">Sarah Jenkins (Ohio)</h4>
          </div>
          <div style="flex: 1; position: relative;">
            <div style="border: 5px solid #1a1a1a; border-radius: 12px; padding: 15px; background: #fff;">
                <div style="border: 1px solid #f15a22; display: flex; flex-direction: column; align-items: center; padding: 15px 15px 0;">
                    <div style="color: #f15a22; font-weight: 900; font-size: 1.2rem; font-style: italic; margin-bottom: 10px;">
                        <i class="fa-solid fa-angle-up" style="font-size: 0.8rem;"></i><i class="fa-solid fa-angle-up" style="font-size: 0.8rem;"></i> ASCENSO
                    </div>
                    <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" alt="Testimonial 3" style="width: 100%; height: 320px; object-fit: cover; display: block; margin-bottom: -1px;">
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- INSTAGRAM SECTION -->
  <section style="background-color: #f15a22; padding: 30px 0; margin-bottom: 20px;">
    <div class="container" style="max-width: 1300px; margin: 0 auto; padding: 0 20px;">
      
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: #222; font-size: 1.4rem; font-weight: 800; text-transform: uppercase;">FOLLOW US ON INSTAGRAM</h2>
        
      </div>

      <div style="overflow: hidden; width: 100%;"><div id="insta-track" style="display: flex; flex-wrap: nowrap; gap: 20px; transition: transform 0.5s ease; width: 100%;">        <!-- Insta 1 -->
        <div style="flex: 1; border-radius: 12px; overflow: hidden; border: 3px solid #fff; aspect-ratio: 1.2/1; position: relative;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 100%; object-fit: cover; background: #222;">
        </div>

        <!-- Insta 2 -->
        <div style="flex: 1; border-radius: 12px; overflow: hidden; border: 3px solid #fff; aspect-ratio: 1.2/1; position: relative;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- Insta 3 -->
        <div style="flex: 1; border-radius: 12px; overflow: hidden; border: 3px solid #fff; aspect-ratio: 1.2/1; position: relative; background: #fff;">
          <div style="text-align: center; padding: 20px 0; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
             <div style="color: #f15a22; font-weight: 900; font-size: 1.2rem; font-style: italic; margin-bottom: 5px;"><i class="fa-solid fa-angle-up" style="font-size: 0.9rem;"></i><i class="fa-solid fa-angle-up" style="font-size: 0.9rem;"></i> ASCENSO</div>
             <div style="font-weight: 700; font-size: 1rem; color: #333; margin-bottom: 10px;">shining at</div>
             <div style="width: 80px; height: 80px; border-radius: 50%; background: #e0ca9e; border: 2px solid #c5a365; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; font-weight: 800; color: #725a2d; text-align: center;">AGRISHOW</div>
          </div>
        </div>

        <!-- Insta 4 -->
        <div style="flex: 1; border-radius: 12px; overflow: hidden; border: 3px solid #fff; aspect-ratio: 1.2/1; position: relative;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;">
          <div style="position: absolute; top: 10px; right: 10px; font-size: 2.5rem; font-weight: 900; color: #f15a22; line-height: 1; text-shadow: 2px 2px 0 #fff;">1 DAY<br><span style="font-size: 1rem; color: #fff; text-shadow: none;">TO GO</span></div>
        </div>

      </div>

      <div style="text-align: center; margin-top: 25px; display: flex; justify-content: center; gap: 12px; align-items: center;">
        <div style="width: 18px; height: 18px; border-radius: 50%; border: 2px solid #222; display: flex; align-items: center; justify-content: center;">
            <div style="width: 8px; height: 8px; border-radius: 50%; background: #222;"></div>
        </div>
        <div style="width: 8px; height: 8px; border-radius: 50%; background: #222;"></div>
        <div style="width: 8px; height: 8px; border-radius: 50%; background: #222;"></div>
        <div style="width: 8px; height: 8px; border-radius: 50%; background: #222;"></div>
      </div>

    </div>
  </section>

    <!-- LATEST AT ASCENSO SECTION -->
  <section style="background-color: #fff; margin-bottom: 40px; padding: 20px 0;">
    <div class="container" style="max-width: 1300px; margin: 0 auto; padding: 0 20px;">
      
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; flex-wrap: wrap; gap: 20px;">
        <h2 style="color: #f15a22; font-size: 1.5rem; font-weight: 800; text-transform: uppercase;">LATEST AT ASCENSO</h2>
        
        <div style="display: flex; gap: 10px;">
          <button id="btn-tab-news" class="ascenso-tab" style="padding: 8px 25px; border: 1px solid #f15a22; background: #fff; color: #f15a22; transition: all 0.3s; font-weight: 600; border-radius: 4px; cursor: pointer; font-size: 0.9rem;">News</button>
          <button id="btn-tab-events" class="ascenso-tab" style="padding: 8px 25px; border: 1px solid #f15a22; background: #fff; color: #f15a22; transition: all 0.3s; font-weight: 600; border-radius: 4px; cursor: pointer; font-size: 0.9rem;">Events</button>
          <button id="btn-tab-exhibitions" class="ascenso-tab active" style="padding: 8px 25px; border: 1px solid #f15a22; background: #f15a22; color: #fff; transition: all 0.3s; font-weight: 600; border-radius: 4px; cursor: pointer; font-size: 0.9rem;">Exhibitions</button>
        </div>
      </div>

      <div id="tab-content-news" class="ascenso-tab-content" style="display: none; gap: 20px;">
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">New Product Launch</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Global Market Expansion</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Awards and Recognitions</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.jpg') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Sustainability Initiatives</h3>

          </div>
        </div>
      </div>

      <div id="tab-content-events" class="ascenso-tab-content" style="display: none; gap: 20px;">
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.jpg') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Annual Dealer Meet</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Factory Tour 2026</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.jpg') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Tyre Care Workshop</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; background: transparent;"></div>
      </div>

      <div id="tab-content-exhibitions" class="ascenso-tab-content" style="display: flex; gap: 20px;">
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Automechanika Dubai</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">LAMMA</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.png') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Krishi darshan Expo</h3>

          </div>
        </div>
        <div style="flex: 1 1 0; min-width: 200px; border: 1px solid #f15a22; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; cursor: pointer;">
          <img src="{{ asset('frontend/assets/images/ascenso_product.jpg') }}" style="width: 100%; height: 200px; object-fit: cover;">
          <div style="padding: 20px; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #fff;">
            <h3 style="font-size: 1.1rem; color: #333; font-weight: 700; margin-bottom: 15px;">Krishi darshan Expo</h3>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@push('scripts')
<script>
    // JS for Accordion
    document.addEventListener('DOMContentLoaded', () => {
      const panels = document.querySelectorAll('.acc-panel');
      panels.forEach(panel => {
        panel.addEventListener('click', () => {
          // Remove active from all
          panels.forEach(p => {
            p.classList.remove('active');
            p.style.flex = '0 0 50px';
            p.querySelector('.acc-title-vertical').style.opacity = '1';
            p.querySelector('.acc-title-horizontal').style.opacity = '0';
            p.querySelector('.acc-overlay').style.background = 'rgba(0,0,0,0.5)';
          });
          // Add active to clicked
          panel.classList.add('active');
          panel.style.flex = '1';
          panel.querySelector('.acc-title-vertical').style.opacity = '0';
          panel.querySelector('.acc-title-horizontal').style.opacity = '1';
          panel.querySelector('.acc-overlay').style.background = 'linear-gradient(to top, rgba(200, 60, 20, 0.85) 0%, transparent 60%)';
        });
      });
    });

    // JS for Product Slider
    document.addEventListener('DOMContentLoaded', () => {
      const track = document.getElementById('ascenso-product-track');
      const prevBtn = document.getElementById('achvr-prev');
      const nextBtn = document.getElementById('achvr-next');
      const progress = document.getElementById('achvr-progress');
      
      if(!track) return;

      let currentIndex = 0;
      const totalCards = track.children.length;
      let cardsVisible = getCardsVisible();
      let maxIndex = Math.max(0, totalCards - cardsVisible);

      function getCardsVisible() {
        if(window.innerWidth > 1024) return 4;
        if(window.innerWidth > 768) return 2;
        return 1;
      }

      function updateSlider() {
        const cardWidth = track.children[0].offsetWidth;
        const gap = 25;
        track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
        
        // Update progress bar
        const progressWidth = (cardsVisible / totalCards) * 100;
        progress.style.width = `${progressWidth}%`;
        progress.style.left = `${(currentIndex / totalCards) * 100}%`;

        // Update button colors
        if(currentIndex === 0) {
          prevBtn.style.borderColor = '#ccc';
          prevBtn.style.background = '#e0e0e0';
          prevBtn.style.color = '#999';
        } else {
          prevBtn.style.borderColor = '#f15a22';
          prevBtn.style.background = '#fff';
          prevBtn.style.color = '#f15a22';
        }
        
        if(currentIndex === maxIndex) {
          nextBtn.style.borderColor = '#ccc';
          nextBtn.style.background = '#e0e0e0';
          nextBtn.style.color = '#999';
        } else {
          nextBtn.style.borderColor = '#f15a22';
          nextBtn.style.background = '#fff';
          nextBtn.style.color = '#f15a22';
        }
      }

      nextBtn.addEventListener('click', () => {
        if (currentIndex < maxIndex) {
          currentIndex++;
          updateSlider();
        }
      });

      prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
          currentIndex--;
          updateSlider();
        }
      });

      // Initialize
      setTimeout(updateSlider, 100);
      
      window.addEventListener('resize', () => {
        cardsVisible = getCardsVisible();
        maxIndex = Math.max(0, totalCards - cardsVisible);
        if(currentIndex > maxIndex) currentIndex = maxIndex;
        updateSlider();
      });
    });

// Testimonial Slider JS
document.addEventListener('DOMContentLoaded', () => {
    const testimTrack = document.getElementById('ascenso-testim-track');
    const testimPrev = document.getElementById('testim-prev');
    const testimNext = document.getElementById('testim-next');
    const testimProgress = document.getElementById('testim-progress');
    
    if (testimTrack && testimPrev && testimNext) {
        let currentIndex = 0;
        const totalCards = testimTrack.children.length;
        
        function getVisibleCards() {
            return window.innerWidth > 768 ? 2 : 1;
        }

        function updateSlider() {
            let maxIndex = Math.max(0, totalCards - getVisibleCards());
            if(currentIndex > maxIndex) currentIndex = maxIndex;
            
            const cardWidth = testimTrack.children[0].offsetWidth;
            const gap = 40;
            testimTrack.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
            
            // Update progress bar
            const visible = getVisibleCards();
            const progressWidth = (visible / totalCards) * 100;
            if(testimProgress) {
                testimProgress.style.width = `${progressWidth}%`;
                testimProgress.style.left = `${(currentIndex / totalCards) * 100}%`;
            }

            // Buttons
            testimPrev.style.borderColor = currentIndex === 0 ? '#ccc' : '#f15a22';
            testimPrev.style.color = currentIndex === 0 ? '#999' : '#f15a22';
            testimPrev.style.background = currentIndex === 0 ? '#e0e0e0' : '#fff';

            testimNext.style.borderColor = currentIndex >= maxIndex ? '#ccc' : '#f15a22';
            testimNext.style.color = currentIndex >= maxIndex ? '#999' : '#f15a22';
            testimNext.style.background = currentIndex >= maxIndex ? '#e0e0e0' : '#fff';
        }

        testimNext.addEventListener('click', (e) => {
            e.preventDefault();
            let maxIndex = Math.max(0, totalCards - getVisibleCards());
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        });

        testimPrev.addEventListener('click', (e) => {
            e.preventDefault();
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        window.addEventListener('resize', updateSlider);
        setTimeout(updateSlider, 150);
    }
});

// Instagram Slider JS
document.addEventListener('DOMContentLoaded', () => {
    const instaTrack = document.getElementById('insta-track');
    const instaDotsContainer = document.getElementById('insta-dots');
    
    if (instaTrack && instaDotsContainer) {
        let currentIndex = 0;
        const totalCards = instaTrack.children.length;
        
        function getVisibleCards() {
            if (window.innerWidth > 1024) return 4;
            if (window.innerWidth > 768) return 2;
            return 1;
        }

        function buildDots(maxIndex) {
            instaDotsContainer.innerHTML = '';
            const steps = maxIndex + 1;
            if(steps <= 1) {
                instaDotsContainer.style.display = 'none';
                return;
            }
            instaDotsContainer.style.display = 'flex';
            instaDotsContainer.style.alignItems = 'center';
            
            for(let i=0; i<steps; i++) {
                if (i === currentIndex) {
                    instaDotsContainer.innerHTML += `<div style="width: 18px; height: 18px; border-radius: 50%; border: 2px solid #222; display: flex; align-items: center; justify-content: center; cursor: pointer; margin: 0 4px;" onclick="window.goToInsta(${i})"><div style="width: 8px; height: 8px; border-radius: 50%; background: #222;"></div></div>`;
                } else {
                    instaDotsContainer.innerHTML += `<div style="width: 10px; height: 10px; border-radius: 50%; background: #222; cursor: pointer; opacity: 0.5; margin: 0 4px;" onclick="window.goToInsta(${i})"></div>`;
                }
            }
        }
        
        window.goToInsta = function(index) {
            currentIndex = index;
            updateInstaSlider();
        };

        function updateInstaSlider() {
            let maxIndex = Math.max(0, totalCards - getVisibleCards());
            if(currentIndex > maxIndex) currentIndex = maxIndex;
            
            const cardWidth = instaTrack.children[0].offsetWidth;
            const gap = 20;
            instaTrack.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
            buildDots(maxIndex);
        }

        window.addEventListener('resize', updateInstaSlider);
        setTimeout(updateInstaSlider, 150);
    }
});

// Vertical Tabs JS
document.addEventListener('DOMContentLoaded', () => {
    const vtabImg = document.getElementById('vtab-img');
    const vtabTitle = document.getElementById('vtab-title');
    const vtabText = document.getElementById('vtab-text');
    const vtabContainer = document.getElementById('vtab-content-container');
    const tabsContainer = document.getElementById('vtab-tabs-container');

    const allData = [
        {
            title: "SUSTAINABILITY INITIATIVES",
            text: "We make a conscious effort to ensure we are aligned towards our goal: to achieve a zero carbon footprint.",
            img: "{{ asset('frontend/assets/images/ascenso_product.png') }}"
        },
        {
            title: "WE NEVER STOPPED RISING: THE ASCENSO STORY.",
            text: "After building two global giants in the off-highway tyre segment, the illustrious Mahansaria family created Ascenso, its third off-highway tyre manufacturing brand.",
            img: "{{ asset('frontend/assets/images/ascenso_product.jpg') }}"
        },
        {
            title: "MANUFACTURING EXCELLENCE",
            text: "Our state-of-the-art manufacturing facility in Panoli, Gujarat, India spans over 127 acres.",
            img: "{{ asset('frontend/assets/images/ascenso_product.png') }}"
        },
        {
            title: "MILESTONES",
            text: "A journey of continuous growth and expanding global presence across 100+ countries.",
            img: "{{ asset('frontend/assets/images/ascenso_product.jpg') }}"
        },
        {
            title: "OUR SUBSIDIARIES",
            text: "Expanding our reach through strategic subsidiaries worldwide.",
            img: "{{ asset('frontend/assets/images/ascenso_product.png') }}"
        }
    ];

    let activeIndex = 1; // "story" is active initially

    function renderTabs() {
        if(!tabsContainer) return;
        tabsContainer.innerHTML = '';
        
        allData.forEach((item, index) => {
            if (index === activeIndex) return; // Skip active item for tabs

            const tab = document.createElement('div');
            tab.style.flex = '1';
            tab.style.borderLeft = '1px solid #f15a22';
            tab.style.display = 'flex';
            tab.style.flexDirection = 'column';
            tab.style.justifyContent = 'flex-end'; // push to bottom
            tab.style.alignItems = 'flex-start'; // stick to the left line
            tab.style.paddingLeft = '15px';
            tab.style.paddingBottom = '20px';
            tab.style.cursor = 'pointer';
            
            const textSpan = document.createElement('span');
            textSpan.textContent = item.title;
            textSpan.style.writingMode = 'vertical-rl';
            textSpan.style.transform = 'rotate(180deg)';
            textSpan.style.color = '#4a4a4a';
            textSpan.style.fontWeight = '700';
            textSpan.style.fontSize = '1.05rem';
            textSpan.style.textTransform = 'uppercase';
            textSpan.style.letterSpacing = '1px';
            textSpan.style.whiteSpace = 'nowrap';
            textSpan.style.transition = 'color 0.3s';
            
            tab.addEventListener('mouseenter', () => textSpan.style.color = '#f15a22');
            tab.addEventListener('mouseleave', () => textSpan.style.color = '#4a4a4a');

            tab.addEventListener('click', () => {
                activeIndex = index;
                if(vtabContainer) vtabContainer.style.opacity = '0';
                
                setTimeout(() => {
                    if(vtabImg) vtabImg.src = item.img;
                    if(vtabTitle) vtabTitle.textContent = item.title;
                    if(vtabText) vtabText.textContent = item.text;
                    renderTabs();
                    if(vtabContainer) vtabContainer.style.opacity = '1';
                }, 300);
            });

            tab.appendChild(textSpan);
            tabsContainer.appendChild(tab);
        });
    }

    renderTabs();
});

// Latest at Ascenso Tabs JS
document.addEventListener('DOMContentLoaded', () => {
    const btnNews = document.getElementById('btn-tab-news');
    const btnEvents = document.getElementById('btn-tab-events');
    const btnExhibitions = document.getElementById('btn-tab-exhibitions');
    
    const contentNews = document.getElementById('tab-content-news');
    const contentEvents = document.getElementById('tab-content-events');
    const contentExhibitions = document.getElementById('tab-content-exhibitions');

    const tabs = [btnNews, btnEvents, btnExhibitions];
    const contents = [contentNews, contentEvents, contentExhibitions];

    if (btnNews && contentNews) {
        tabs.forEach((tab, index) => {
            if(!tab) return;
            tab.addEventListener('click', (e) => {
                e.preventDefault();
                // Remove active from all tabs
                tabs.forEach(t => {
                    if(t) {
                        t.classList.remove('active');
                        t.style.background = '#fff';
                        t.style.color = '#f15a22';
                    }
                });
                // Hide all contents
                contents.forEach(c => {
                    if(c) c.style.display = 'none';
                });
                
                // Set current active
                tab.classList.add('active');
                tab.style.background = '#f15a22';
                tab.style.color = '#fff';
                if(contents[index]) contents[index].style.display = 'flex';
            });
        });
    }
});
</script>
@endpush
