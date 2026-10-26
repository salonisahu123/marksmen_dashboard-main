@extends('frontend.layout.main')

@section('title', 'Eicher Commercial Trucks - Marksmen Group')

@section('content')
  <!-- EICHER 2S BUSINESS SECTION (From Brief) -->
  <section class="section-padding" style="background-color: var(--bg-light);">
    <div class="container">
      <div class="section-header text-center">
        <span class="section-tag">About Eicher</span>
        <h2 class="section-title">Eicher Commercial Vehicle <span>Solutions</span></h2>
        <p class="section-subtitle">Marksmen Automobiles Pvt. Ltd. is associated with Eicher’s commercial vehicle ecosystem, providing customers with reliable solutions for commercial transportation requirements.</p>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-bullseye" style="color: var(--accent); margin-right: 8px;"></i> Business Focus</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Eicher commercial vehicles</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Vehicle sales and customer support</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Workshop and service facilities</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Genuine spare parts</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Preventive maintenance</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Customer assistance and after-sales support</li>
          </ul>
        </div>
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-screwdriver-wrench" style="color: var(--accent); margin-right: 8px;"></i> Key Services</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Vehicle servicing and maintenance</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Periodic maintenance</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Repairs and diagnostics</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Genuine Eicher spare parts</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Workshop support</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Customer assistance</li>
          </ul>
        </div>
        
        <div style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid var(--accent);">
          <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--primary); margin-bottom: 1rem;"><i class="fa-solid fa-users" style="color: var(--accent); margin-right: 8px;"></i> Customer Segments</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #555; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Transporters & Fleet owners</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Infrastructure companies</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Construction businesses</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Logistics companies</li>
            <li><i class="fa-solid fa-check" style="color: var(--accent); margin-right: 8px;"></i> Small & medium operators</li>
          </ul>
        </div>

      </div>
      
      <div style="text-align: center; margin-bottom: 2rem;">
        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">Key USP</h3>
        <p style="font-size: 1.1rem; color: #555; max-width: 800px; margin: 0 auto;"><strong>Sales + Service + Genuine Spares</strong> – complete commercial vehicle support under one roof.</p>
      </div>

      <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
        <span class="btn btn-primary" style="cursor: default;">Explore Eicher Solutions</span>
        <a href="#eicher-journal" class="btn btn-secondary">Book a Service</a>
        <a href="{{ url('/contact?product=VECV+Eicher+Commercial+Vehicles') }}" class="btn btn-outline btn-enquire" data-product-name="VECV Eicher Commercial Vehicles">Enquire Now</a>
      </div>
    </div>
  </section>

  <section style="position: relative; width: 100%; height: 70vh; min-height: 500px; display: flex; align-items: center; justify-content: flex-start; overflow: hidden; background: url('{{ asset('frontend/assets/images/eicher_fleet.png') }}') center/cover no-repeat;">
    <!-- Dark overlay to make text readable -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0) 100%); z-index: 1;"></div>
    
    <div class="container" style="position: relative; z-index: 2; padding: 0 15px;">
      <div style="display: inline-block; background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); backdrop-filter: blur(4px); padding: 6px 16px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; letter-spacing: 1px; color: var(--accent); text-transform: uppercase; margin-bottom: 20px;">
        <i class="fa-solid fa-truck-moving" style="margin-right: 6px;"></i> Eicher Commercial Trucks
      </div>
      <h1 style="font-size: clamp(2.5rem, 5vw, 4.5rem); font-weight: 800; color: white; line-height: 1.1; margin-bottom: 20px; text-shadow: 0 2px 10px rgba(0,0,0,0.3);">
        Eicher Heavy Duty<br>
        <span style="color: var(--accent);">Authorized OEM Dealer</span>
      </h1>
      <p style="font-size: 1.1rem; color: #e2e8f0; max-width: 600px; line-height: 1.6; margin-bottom: 30px; text-shadow: 0 1px 4px rgba(0,0,0,0.5);">
        Authorized Dealer for Eicher Trucks. Built to take on every challenge, from heavy-load trucking to long-haul logistics.
      </p>
    </div>
  </section>

  <!-- EICHER STORIES UNBOXED -->
  <section style="padding: 60px 0; background-color: #fff; text-align: center;">
    <div class="container" style="max-width: 1300px; padding: 0 15px; margin: 0 auto;">
      <h2 style="font-size: 2.5rem; font-weight: 800; color: #333; margin-bottom: 15px; text-transform: uppercase; letter-spacing: 1px;">EICHER STORIES UNBOXED</h2>
      <p style="font-size: 1.1rem; color: #555; max-width: 700px; margin: 0 auto 40px; line-height: 1.6;">Discover Eicher like never before. Watch our engaging videos and follow the journeys of those who drive us forward.</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <!-- Card 1 -->
        <a href="https://youtu.be/GqPTiEWnIVQ?si=GfFEL_YxpWX9j6dW" target="_blank" style="display: block; text-decoration: none; position: relative; border-radius: 12px; overflow: hidden; height: 400px; background: url('https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/77f8d9c7bbcad9dad15a931ed034debe.png') center/cover;">
           <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent 50%);"></div>
           <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; background: rgba(255,255,255,0.3); border: none; border-radius: 50%; color: white; font-size: 24px; cursor: pointer; backdrop-filter: blur(4px); pointer-events: none;"><i class="fa-solid fa-play"></i></button>
           <h3 style="position: absolute; bottom: 20px; left: 20px; color: white; font-size: 1.5rem; font-weight: 800; margin: 0; text-transform: uppercase;">EICHER PRO X</h3>
        </a>
        <!-- Card 2 -->
        <a href="https://www.youtube.com/watch?v=iNqWC0m9WW0" target="_blank" style="display: block; text-decoration: none; position: relative; border-radius: 12px; overflow: hidden; height: 400px; background: url('https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/a8801e43cd738cd3de98de10274b02ff.png') center/cover;">
           <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent 50%);"></div>
           <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; background: rgba(255,255,255,0.3); border: none; border-radius: 50%; color: white; font-size: 24px; cursor: pointer; backdrop-filter: blur(4px); pointer-events: none;"><i class="fa-solid fa-play"></i></button>
           <div style="position: absolute; bottom: 20px; left: 20px; color: white; text-align: left;">
             <h3 style="font-size: 1.5rem; font-weight: 800; margin: 0 0 5px; text-transform: uppercase;">EICHER GENUINE PARTS ZAROOR MILEGA</h3>
             <p style="font-size: 0.75rem; margin: 0; opacity: 0.8;">*Select fast moving parts available across all Eicher authorised workshops. If not available in 24 hours, it's free.</p>
           </div>
        </a>
        <!-- Card 3 -->
        <a href="https://www.youtube.com/watch?v=UAss4AO8lBw" target="_blank" style="display: block; text-decoration: none; position: relative; border-radius: 12px; overflow: hidden; height: 400px; background: url('https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/4d5a0543b48368919568ce994baba955.png') center/cover;">
           <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent 50%);"></div>
           <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; background: rgba(255,255,255,0.3); border: none; border-radius: 50%; color: white; font-size: 24px; cursor: pointer; backdrop-filter: blur(4px); pointer-events: none;"><i class="fa-solid fa-play"></i></button>
           <h3 style="position: absolute; bottom: 20px; left: 20px; color: white; font-size: 1.5rem; font-weight: 800; margin: 0; text-transform: uppercase;">LIFE BADAL DE</h3>
        </a>
      </div>
    </div>
  </section>

  <!-- MODERNIZING COMMERCIAL TRANSPORT GLOBALLY -->
  <section style="position: relative; width: 100%; padding: 80px 0; min-height: 400px; background: url('https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80') center/cover no-repeat; margin-bottom: 40px;">
    <div style="position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 60%, rgba(0,0,0,0) 100%);"></div>
    <div class="container" style="position: relative; z-index: 2; max-width: 1300px; padding: 0 15px; margin: 0 auto;">
      <div style="max-width: 700px;">
        <h4 style="color: #fff; font-size: 1rem; font-weight: 700; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 1px;">OUR LEGACY</h4>
        <h2 id="eicher-legacy-title" style="color: #fff; font-size: 3rem; font-weight: 800; margin-bottom: 20px; line-height: 1.1;">MODERNIZING COMMERCIAL<br>TRANSPORT GLOBALLY</h2>
        <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.6; margin-bottom: 40px;">For Eicher, it is all about making transportation and mobility more meaningful by employing relevant modernisation and sustainable solutions.</p>
        
        <div id="eicher-stats-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
          <div>
            <div style="color: #fff; font-size: 2.5rem; font-weight: 800; line-height: 1;">1.94 lakh +</div>
            <div style="color: #e2e8f0; font-size: 1rem; font-weight: 500; margin-top: 5px;">My Eicher Customers</div>
          </div>
          <div>
            <div style="color: #fff; font-size: 2.5rem; font-weight: 800; line-height: 1;">600 +</div>
            <div style="color: #e2e8f0; font-size: 1rem; font-weight: 500; margin-top: 5px;">Dealerships</div>
          </div>
          <div>
            <div style="color: #fff; font-size: 2.5rem; font-weight: 800; line-height: 1;">1250 +</div>
            <div style="color: #e2e8f0; font-size: 1rem; font-weight: 500; margin-top: 5px;">Touchpoints</div>
          </div>
          <div>
            <div style="color: #fff; font-size: 2.5rem; font-weight: 800; line-height: 1;">1.86 lakh +</div>
            <div style="color: #e2e8f0; font-size: 1rem; font-weight: 500; margin-top: 5px;">Connected Vehicles</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TRENDING VIDEOS -->
  <section style="padding: 40px 0; background-color: #fff; margin-bottom: 40px;">
    <div class="container" style="max-width: 1300px; padding: 0 15px; margin: 0 auto;">
      <div id="eicher-video-grid" style="display: grid; grid-template-columns: 1.5fr 1fr 1fr; grid-template-rows: 250px 250px; gap: 20px;">
        <!-- Main Large Video -->
        <a href="https://youtu.be/96629StD0GI?si=50cax6YUGkhLi-IL" target="_blank" style="text-decoration: none; grid-row: span 2; position: relative; border-radius: 12px; overflow: hidden; background: #000; display: flex; flex-direction: column; cursor: pointer; display: block; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
           <img src="https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/77f8d9c7bbcad9dad15a931ed034debe.png" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">
           <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; background: rgba(255,255,255,0.3); border: none; border-radius: 50%; color: white; font-size: 24px; pointer-events: none; backdrop-filter: blur(4px);"><i class="fa-solid fa-play"></i></button>
           <div style="position: absolute; top: 20px; right: 20px; background: #fff; color: #000; padding: 4px 12px; border-radius: 20px; font-weight: 700; font-size: 0.8rem;">Trending</div>
           <div style="position: absolute; bottom: 20px; left: 20px; right: 20px;">
             <div style="display: inline-block; background: #e1251b; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 700; margin-bottom: 10px;">Oct, 2025</div>
             <h3 style="color: #fff; font-size: 1.3rem; font-weight: 700; margin: 0; line-height: 1.3;">In Conversation with ET Now, Vinod Aggarwal, MD & CEO,VECV Discusses Our Latest Milestones...</h3>
           </div>
        </a>

        <!-- Top Middle -->
        <a href="https://www.youtube.com/watch?v=K_wBigGktzQ" target="_blank" style="text-decoration: none; position: relative; border-radius: 12px; overflow: hidden; background: #000; display: block; cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
           <img src="https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/a8801e43cd738cd3de98de10274b02ff.png" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">
           <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 45px; height: 45px; background: rgba(255,255,255,0.3); border: none; border-radius: 50%; color: white; font-size: 18px; pointer-events: none; backdrop-filter: blur(4px);"><i class="fa-solid fa-play"></i></button>
           <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
             <div style="display: inline-block; background: #e1251b; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 700; margin-bottom: 5px;">Jul, 2025</div>
             <h3 style="color: #fff; font-size: 1rem; font-weight: 700; margin: 0; line-height: 1.3;">Vishal Mathur (VECV) on the Future of Eicher LMD Trucks | Exclusive Interview</h3>
           </div>
        </a>

        <!-- Top Right -->
        <a href="https://www.youtube.com/watch?v=cVGRT6V5Yl4" target="_blank" style="text-decoration: none; position: relative; border-radius: 12px; overflow: hidden; background: #000; display: block; cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
           <img src="https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/4d5a0543b48368919568ce994baba955.png" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">
           <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 45px; height: 45px; background: rgba(255,255,255,0.3); border: none; border-radius: 50%; color: white; font-size: 18px; pointer-events: none; backdrop-filter: blur(4px);"><i class="fa-solid fa-play"></i></button>
           <div style="position: absolute; bottom: 15px; left: 15px; right: 15px;">
             <div style="display: inline-block; background: #e1251b; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 0.7rem; font-weight: 700; margin-bottom: 5px;">Jan, 2025</div>
             <h3 style="color: #fff; font-size: 1rem; font-weight: 700; margin: 0; line-height: 1.3;">VECVs electric-first strategy for the largest CV market segment</h3>
           </div>
        </a>

        <!-- Bottom Spanning 2 Columns -->
        <a href="https://www.youtube.com/watch?v=1OuEAC-BOuU" target="_blank" style="text-decoration: none; grid-column: span 2; position: relative; border-radius: 12px; overflow: hidden; background: #000; display: block; cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
           <img src="https://img.youtube.com/vi/1OuEAC-BOuU/maxresdefault.jpg" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.8; transition: opacity 0.3s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.8'">
           <button style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 50px; height: 50px; background: rgba(255,255,255,0.3); border: none; border-radius: 50%; color: white; font-size: 20px; pointer-events: none; backdrop-filter: blur(4px);"><i class="fa-solid fa-play"></i></button>
           <div style="position: absolute; bottom: 20px; left: 20px; right: 20px;">
             <div style="display: inline-block; background: #e1251b; color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; font-weight: 700; margin-bottom: 10px;">Dec, 2024</div>
             <h3 style="color: #fff; font-size: 1.1rem; font-weight: 700; margin: 0; line-height: 1.3;">Full Year Growth For The Company Will Be Better Than The Industry: VECV | CNBC TV18</h3>
           </div>
        </a>
      </div>
    </div>
  </section>

  <!-- THE EICHER JOURNAL -->
  <section id="eicher-journal" style="padding: 60px 0; background-color: #fff;">
    <div class="container" style="max-width: 1300px; padding: 0 15px; margin: 0 auto; text-align: center;">
      <h2 style="font-size: 2.5rem; font-weight: 800; color: #333; margin-bottom: 15px; text-transform: uppercase;">THE EICHER JOURNAL</h2>
      <p style="font-size: 1.1rem; color: #555; max-width: 700px; margin: 0 auto 40px; line-height: 1.6;">From expert insights on vehicle technology to captivating stories from the road, our blogs and articles offer a deep look into the Eicher vehicle world.</p>
      
      <div style="overflow: hidden; width: 100%;">
        <div id="eicher-journal-slider-track" style="display: flex; gap: 30px; transition: transform 0.5s ease; width: 100%;">
          @forelse($journals ?? [] as $journal)
          <!-- Dynamic Article -->
          <div style="flex: 0 0 calc(33.333% - 20px); text-align: left; min-width: 300px;">
            <div style="position: relative; border-radius: 12px; overflow: hidden; height: 250px; margin-bottom: 20px;">
               <img src="{{ $journal->image ? asset('uploads/' . $journal->image) : 'https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/77f8d9c7bbcad9dad15a931ed034debe.png' }}" style="width: 100%; height: 100%; object-fit: cover;">
               @if($journal->category)
               <div style="position: absolute; top: 15px; right: 15px; background: #fff; color: #333; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">{{ $journal->category }}</div>
               @endif
            </div>
            <div style="color: #666; font-size: 0.9rem; margin-bottom: 10px;"><i class="fa-regular fa-calendar"></i> {{ $journal->publish_date ? \Carbon\Carbon::parse($journal->publish_date)->format('d M, Y') : '' }}</div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #333; margin-bottom: 15px; line-height: 1.4;">{{ $journal->title }}</h3>
          </div>
          @empty
          <!-- Default Article 1 -->
          <div style="flex: 0 0 calc(33.333% - 20px); text-align: left; min-width: 300px;">
            <div style="position: relative; border-radius: 12px; overflow: hidden; height: 250px; margin-bottom: 20px;">
               <img src="https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/77f8d9c7bbcad9dad15a931ed034debe.png" style="width: 100%; height: 100%; object-fit: cover;">
               <div style="position: absolute; top: 15px; right: 15px; background: #fff; color: #333; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Products & Services</div>
            </div>
            <div style="color: #666; font-size: 0.9rem; margin-bottom: 10px;"><i class="fa-regular fa-calendar"></i> 25 Sep, 2026</div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #333; margin-bottom: 15px; line-height: 1.4;">What Is Shaping Electric Truck Adoption In India In 2026</h3>
          </div>
          
          <!-- Default Article 2 -->
          <div style="flex: 0 0 calc(33.333% - 20px); text-align: left; min-width: 300px;">
            <div style="position: relative; border-radius: 12px; overflow: hidden; height: 250px; margin-bottom: 20px;">
               <img src="https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/a8801e43cd738cd3de98de10274b02ff.png" style="width: 100%; height: 100%; object-fit: cover;">
               <div style="position: absolute; top: 15px; right: 15px; background: #fff; color: #333; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Products & Services</div>
            </div>
            <div style="color: #666; font-size: 0.9rem; margin-bottom: 10px;"><i class="fa-regular fa-calendar"></i> 18 Sep, 2026</div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #333; margin-bottom: 15px; line-height: 1.4;">Using Connected Data To Improve Visibility Across Tipper Fleets</h3>
          </div>

          <!-- Default Article 3 -->
          <div style="flex: 0 0 calc(33.333% - 20px); text-align: left; min-width: 300px;">
            <div style="position: relative; border-radius: 12px; overflow: hidden; height: 250px; margin-bottom: 20px;">
               <img src="https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/4d5a0543b48368919568ce994baba955.png" style="width: 100%; height: 100%; object-fit: cover;">
               <div style="position: absolute; top: 15px; right: 15px; background: #fff; color: #333; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Products & Services</div>
            </div>
            <div style="color: #666; font-size: 0.9rem; margin-bottom: 10px;"><i class="fa-regular fa-calendar"></i> 04 Sep, 2026</div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #333; margin-bottom: 15px; line-height: 1.4;">Choosing The Right Heavy-Duty Trucks For Regional Logistics</h3>
          </div>

          <!-- Default Article 4 -->
          <div style="flex: 0 0 calc(33.333% - 20px); text-align: left; min-width: 300px;">
            <div style="position: relative; border-radius: 12px; overflow: hidden; height: 250px; margin-bottom: 20px;">
               <img src="https://cms.eichertrucksandbuses.com/uploads/truck/sub-category/77f8d9c7bbcad9dad15a931ed034debe.png" style="width: 100%; height: 100%; object-fit: cover;">
               <div style="position: absolute; top: 15px; right: 15px; background: #fff; color: #333; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Eicher Updates</div>
            </div>
            <div style="color: #666; font-size: 0.9rem; margin-bottom: 10px;"><i class="fa-regular fa-calendar"></i> 20 Aug, 2026</div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #333; margin-bottom: 15px; line-height: 1.4;">Unveiling Our Newest Green Energy Commercial Fleet</h3>
          </div>
          @endforelse
        </div>
      </div>
      
      <div style="margin-top: 40px;">
        <button id="ej-prev" style="width: 40px; height: 40px; border-radius: 50%; border: none; background: #e0e0e0; color: #666; margin: 0 5px; cursor: pointer;"><i class="fa-solid fa-chevron-left"></i></button>
        <button id="ej-next" style="width: 40px; height: 40px; border-radius: 50%; border: none; background: #333; color: #fff; margin: 0 5px; cursor: pointer;"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track = document.getElementById('eicher-journal-slider-track');
        const prev = document.getElementById('ej-prev');
        const next = document.getElementById('ej-next');
        
        if(track && prev && next) {
        let index = 0;
        const items = track.children;
        const gap = 30;
        
        function updateSlider() {
            const itemWidth = items[0].offsetWidth;
            track.style.transform = `translateX(-${index * (itemWidth + gap)}px)`;
        }
        
        next.addEventListener('click', () => {
            if (index < items.length - Math.floor(track.parentElement.offsetWidth / items[0].offsetWidth)) {
            index++;
            updateSlider();
            }
        });
        
        prev.addEventListener('click', () => {
            if (index > 0) {
            index--;
            updateSlider();
            }
        });
        
        window.addEventListener('resize', updateSlider);
        }
    });
</script>
@endpush
