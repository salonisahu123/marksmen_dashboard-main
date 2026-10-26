@extends('admin.layouts.app')

@section('title', 'Edit Testimonial')

@section('content')
<div class="mk-page">

    <div class="mk-filter-card" style="margin-bottom: 20px;">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Edit Testimonial / Story</strong>
                    <span>Update customer feedback or equipment delivery video story</span>
                </div>
            </div>
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
                <i class="fa-solid fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="mk-card" style="padding: 24px; max-width: 820px;">
        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Card Type Selection --}}
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 700;">Story / Testimonial Type *</label>
                <div style="display: flex; gap: 20px;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; padding: 10px 16px; border: 1px solid #cbd5e1; border-radius: 8px; flex: 1;" id="lbl-type-text">
                        <input type="radio" name="card_type" value="text" {{ old('card_type', $testimonial->card_type) === 'text' ? 'checked' : '' }} onchange="toggleCardType(this.value)">
                        <div>
                            <strong><i class="fa-solid fa-quote-left" style="color: var(--primary);"></i> Client Feedback / Review</strong>
                            <div style="font-size: 0.75rem; color: #64748b;">Includes 5-star rating, review text & client designation</div>
                        </div>
                    </label>

                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; padding: 10px 16px; border: 1px solid #cbd5e1; border-radius: 8px; flex: 1;" id="lbl-type-video">
                        <input type="radio" name="card_type" value="video" {{ old('card_type', $testimonial->card_type) === 'video' ? 'checked' : '' }} onchange="toggleCardType(this.value)">
                        <div>
                            <strong><i class="fa-solid fa-video" style="color: #ef4444;"></i> Video Delivery Handover</strong>
                            <div style="font-size: 0.75rem; color: #64748b;">Includes photo thumbnail with direct YouTube popup play</div>
                        </div>
                    </label>
                </div>
                @error('card_type')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Client Name / Title --}}
            <div style="margin-bottom: 18px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">
                    <span id="name-label">Client / Author Name</span> *
                </label>
                <input type="text" name="author_name" class="mk-input" style="width: 100%;" required value="{{ old('author_name', $testimonial->author_name) }}" placeholder="e.g. Mr. Vikas Mittal or Fleet Delivery Handover">
                @error('author_name')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Designation / Subtitle --}}
            <div style="margin-bottom: 18px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">Designation / Location / Subtitle</label>
                <input type="text" name="author_designation" class="mk-input" style="width: 100%;" value="{{ old('author_designation', $testimonial->author_designation) }}" placeholder="e.g. MINING OPERATIONS, SAGAR or GWALIOR HIGHWAY CONTRACT">
                @error('author_designation')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Feedback Text Fields (Shown when type == 'text') --}}
            <div id="text-fields-group">
                <div style="margin-bottom: 18px;">
                    <label style="display: block; margin-bottom: 6px; font-weight: 600;">Testimonial Review / Quote *</label>
                    <textarea name="content" rows="4" class="mk-input" style="width: 100%; font-family: inherit; line-height: 1.5;" placeholder="Write client's feedback here...">{{ old('content', $testimonial->content) }}</textarea>
                    @error('content')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
                </div>

                <div style="margin-bottom: 18px;">
                    <label style="display: block; margin-bottom: 6px; font-weight: 600;">Rating (Stars)</label>
                    <select name="rating" class="mk-input" style="width: 200px;">
                        <option value="5" {{ old('rating', $testimonial->rating) == 5 ? 'selected' : '' }}>★★★★★ (5 Stars)</option>
                        <option value="4" {{ old('rating', $testimonial->rating) == 4 ? 'selected' : '' }}>★★★★☆ (4 Stars)</option>
                        <option value="3" {{ old('rating', $testimonial->rating) == 3 ? 'selected' : '' }}>★★★☆☆ (3 Stars)</option>
                        <option value="2" {{ old('rating', $testimonial->rating) == 2 ? 'selected' : '' }}>★★☆☆☆ (2 Stars)</option>
                        <option value="1" {{ old('rating', $testimonial->rating) == 1 ? 'selected' : '' }}>★☆☆☆☆ (1 Star)</option>
                    </select>
                </div>
            </div>

            {{-- Video Fields (Shown when type == 'video') --}}
            <div id="video-fields-group" style="display: none; background: #fffaf0; border: 1px solid #feebc8; border-radius: 8px; padding: 18px; margin-bottom: 20px;">
                <div style="margin-bottom: 14px;">
                    <label style="display: block; margin-bottom: 6px; font-weight: 700; color: #c05621;">
                        <i class="fa-brands fa-youtube"></i> YouTube Video URL or Video ID
                    </label>
                    <input type="text" name="video_id" class="mk-input" style="width: 100%;" value="{{ old('video_id', $testimonial->video_id) }}" placeholder="e.g. https://www.youtube.com/watch?v=M7lc1UVf-VE or M7lc1UVf-VE">
                    <span style="font-size: 0.75rem; color: #718096; display: block; margin-top: 4px;">You can paste the entire YouTube link or just the 11-digit video ID. It will automatically play in popup modal.</span>
                    @error('video_id')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
                </div>
            </div>

            {{-- Photo / Thumbnail Upload --}}
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">
                    <span id="image-label">Photo / Video Thumbnail</span>
                </label>

                @if($testimonial->image)
                    <div style="margin-bottom: 10px; display: flex; align-items: center; gap: 15px;">
                        <img src="{{ asset('uploads/' . $testimonial->image) }}" alt="Preview" style="height: 70px; width: 110px; object-fit: cover; border-radius: 6px; border: 1px solid #cbd5e1;">
                        <span style="font-size: 0.8rem; color: #64748b;">Current image. Upload new file below to replace it.</span>
                    </div>
                @endif

                <input type="file" name="image" class="mk-input" style="width: 100%;" accept="image/*">
                <span style="font-size: 0.75rem; color: #64748b; display: block; margin-top: 4px;" id="image-help">Upload photo (Recommended for Video deliveries: crisp landscape photo).</span>
                @error('image')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Sort Order & Active --}}
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
                <div>
                    <label style="display: block; margin-bottom: 6px; font-weight: 600;">Display Order</label>
                    <input type="number" name="sort_order" class="mk-input" style="width: 100%;" value="{{ old('sort_order', $testimonial->sort_order) }}" min="0">
                    <span style="font-size: 0.75rem; color: #64748b;">Lower numbers appear first in the slider (e.g. 1, 2, 3...)</span>
                </div>

                <div style="display: flex; align-items: center; padding-top: 24px;">
                    <label style="display: flex; align-items: center; cursor: pointer;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }} style="margin-right: 10px; width: 18px; height: 18px;">
                        <span style="font-weight: 600;">Active (Visible on homepage)</span>
                    </label>
                </div>
            </div>

            <div style="border-top: 1px solid #e2e8f0; padding-top: 18px; display: flex; gap: 12px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 24px;">
                    <i class="fa-solid fa-check"></i> Update Testimonial
                </button>
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary" style="padding: 10px 24px;">Cancel</a>
            </div>
        </form>
    </div>

</div>

<script>
    function toggleCardType(val) {
        const textGroup = document.getElementById('text-fields-group');
        const videoGroup = document.getElementById('video-fields-group');
        const nameLabel = document.getElementById('name-label');
        const imageLabel = document.getElementById('image-label');

        if (val === 'video') {
            textGroup.style.display = 'none';
            videoGroup.style.display = 'block';
            nameLabel.innerText = 'Handover Title / Client Name';
            imageLabel.innerText = 'Video Thumbnail / Handover Photo';
        } else {
            textGroup.style.display = 'block';
            videoGroup.style.display = 'none';
            nameLabel.innerText = 'Client / Author Name';
            imageLabel.innerText = 'Client Photo / Avatar (Optional)';
        }
    }

    // Init state on page load
    document.addEventListener('DOMContentLoaded', function() {
        const checked = document.querySelector('input[name="card_type"]:checked');
        if (checked) {
            toggleCardType(checked.value);
        }
    });
</script>
@endsection
