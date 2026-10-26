@extends('frontend.layout.main')

@section('title', 'Schwing Stetter Products - Marksmen Group')

@push('styles')
<style>
    .product-card {
        background: white;
        border: none; background: transparent;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        cursor: pointer;
    }
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .p-banner {
        background: #cccccc;
        color: #333333;
        text-align: center;
        padding: 15px;
        font-weight: 700;
        font-size: 0.95rem;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .product-card:hover .p-banner {
        background: var(--accent);
        color: #333333;
    }
    .p-enquire-btn {
        background: #222222;
        color: #ffffff;
        border: none;
        padding: 11px 15px;
        font-size: 0.85rem;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .product-card:hover .p-enquire-btn,
    .p-enquire-btn:hover {
        background: var(--primary);
        color: #ffffff;
    }
    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }
    @media(max-width: 1024px) { .products-grid { grid-template-columns: repeat(2, 1fr); } }
    @media(max-width: 600px) { .products-grid { grid-template-columns: repeat(1, 1fr); } }
</style>
@endpush

@section('content')
  <!-- SCHWING STETTER PRODUCT BANNER -->
  <section class="schwing-banner" style="position: relative; width: 100%; height: 350px; display: block; overflow: hidden; background: #e3eff6;">
    <img src="{{ asset('frontend/assets/images/schwing_banner.png') }}" alt="Schwing Stetter Banner" style="width: 100%; height: 100%; object-fit: cover; object-position: center right; display: block;">
    <a href="{{ url('/contact?product=Schwing+Stetter+Concrete+Systems') }}" class="btn-enquire" data-product-name="Schwing Stetter Concrete Systems" style="position: absolute; right: 0; top: 50%; transform: translateY(-50%); background-color: #333333; color: white; padding: 15px 5px; writing-mode: vertical-rl; text-orientation: mixed; z-index: 3; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; font-size: 0.85rem; text-decoration: none; cursor: pointer;">ENQUIRY</a>
  </section>

  <!-- SCHWING STETTER BUSINESS SECTION (From Brief) -->
  <section class="section-padding" style="background-color: var(--bg-light);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">About Schwing Stetter</span>
        <h2 class="section-title">Concrete Equipment <span>Solutions</span></h2>
        <p class="section-subtitle">Marksmen Group provides concrete equipment solutions from Schwing Stetter for customers involved in construction, infrastructure and ready-mix concrete operations.</p>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-cubes-stacked" style="color: var(--accent); margin-right: 8px;"></i> Product Categories</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Concrete Batching Plants</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Transit Mixers</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Concrete Pumps</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Concrete Equipment</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Spare Parts & Related solutions</li>
          </ul>
        </div>
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-bridge" style="color: var(--accent); margin-right: 8px;"></i> Applications</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> High-rise construction</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Roads & bridges</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Metro and infrastructure projects</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Residential & Commercial construction</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Ready-mix concrete operations</li>
          </ul>
        </div>
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-screwdriver-wrench" style="color: var(--accent); margin-right: 8px;"></i> Our Services</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Equipment sales, Installation & commissioning</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Preventive maintenance & Breakdown support</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Workshop services & Genuine spare parts</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Technical assistance & Customer support</li>
          </ul>
        </div>

      </div>
      
      <div style="text-align: center; margin-bottom: 2rem;">
        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">Key USP</h3>
        <p style="font-size: 1.1rem; color: #555; max-width: 800px; margin: 0 auto;">Complete concrete equipment solutions backed by professional sales, service and spare-parts support.</p>
      </div>

      <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
        <span class="btn btn-primary" style="cursor: default;">Explore Concrete Solutions</span>
        <a href="{{ url('/contact?product=Schwing+Stetter+Concrete+Systems') }}" class="btn btn-secondary btn-enquire" data-product-name="Schwing Stetter Concrete Systems">Enquire Now</a>
      </div>
    </div>
  </section>

  <section class="products-filter-section section-padding" style="background-color: #f4f4f4;">
    <div class="container">
      
      <!-- Filters -->
      <div class="product-filters" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 3rem;">
        <button class="filter-btn active" data-filter="all" style="padding: 10px 20px; background-color: white; border: 1px solid #ccc; font-weight: 600; color: #333333; cursor: pointer; transition: all 0.3s ease;">All</button>
        @foreach($categories ?? [] as $category)
        <button class="filter-btn" data-filter="{{ $category->slug }}" style="padding: 10px 20px; background-color: #333333; border: 1px solid var(--primary); font-weight: 600; color: white; cursor: pointer; transition: all 0.3s ease;">{{ $category->name }}</button>
        @endforeach
      </div>

      <!-- Products Grid -->
      <div class="products-grid" style="">
        
        @forelse($products ?? [] as $product)
        <div class="product-card" data-category="{{ $product->category->slug ?? 'other' }}">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="{{ $product->image ? asset('uploads/' . $product->image) : 'https://d3odyy5st6a5um.cloudfront.net/sites/default/files/Less-than-30-cu.m-hour_0.png' }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">{{ $product->name }}</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - {{ $product->name }}">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>
        @empty
        <div class="product-card" data-category="batching-plant">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/Less-than-30-cu.m-hour_0.png" alt="Compact Batching Plants" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Compact Batching Plants</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Compact Batching Plants">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>

        <div class="product-card" data-category="batching-plant">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/30-to-60-cu.m-hour_0.png" alt="Mobile Batching Plants" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Mobile Batching Plants</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Mobile Batching Plants">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>

        <div class="product-card" data-category="batching-plant">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/More-than-60-cu.m-hour_0.png" alt="Horizontal Batching Plants" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Horizontal Batching Plants</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Horizontal Batching Plants">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>

        <div class="product-card" data-category="concrete-machinery">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/More-than-60-cu.m-hour_0.png" alt="Truck Mounted Concrete Pump" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Truck Mounted Concrete Pump</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Truck Mounted Concrete Pump">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>

        <div class="product-card" data-category="concrete-machinery">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/Boom-Pump_0.png" alt="Stationary Pump" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Stationary Pump</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Stationary Pump">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>

        <div class="product-card" data-category="concrete-machinery">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/Placing-Belt_0.png" alt="Placing Boom" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Placing Boom</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Placing Boom">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>

        <div class="product-card" data-category="concrete-machinery">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/Concrete-Mixer_0.png" alt="Concrete Truck Mixer" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Concrete Truck Mixer</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Concrete Truck Mixer">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>

        <div class="product-card" data-category="other">
          <div class="p-img" style="padding: 0; background: white; text-align: center; flex-grow: 1; display: flex; align-items: center; justify-content: center; height: 260px; overflow: hidden;">
            <img src="https://d3odyy5st6a5um.cloudfront.net/sites/default/files/Recycle-Plant_0.png" alt="Recycling Plant" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
          </div>
          <div class="p-banner">Recycling Plant</div>
          <button type="button" class="btn-product-enquire p-enquire-btn" data-product-name="Schwing Stetter - Recycling Plant">
            <i class="fa-solid fa-paper-plane" style="color: var(--accent);"></i> Inquire Now
          </button>
        </div>
        @endforelse

      </div>
    </div>
  </section>
@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        // Remove active class from all buttons
        filterBtns.forEach(b => {
          b.classList.remove('active');
          b.style.backgroundColor = 'var(--primary)';
          b.style.color = 'white';
        });
        
        // Add active class to clicked button
        btn.classList.add('active');
        btn.style.backgroundColor = 'white';
        btn.style.color = 'var(--primary)';

        const filterValue = btn.getAttribute('data-filter');

        productCards.forEach(card => {
          if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  });
</script>
@endpush
