@extends('admin.layouts.app')

@section('title', 'Add New Client')

@section('content')
<div class="mk-page">

    <div class="mk-filter-card" style="margin-bottom: 20px;">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Add New Client / Customer</strong>
                    <span>Add a new enterprise partner, key customer, or OEM brand</span>
                </div>
            </div>
            <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary">
                <i class="fa-solid fa-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="mk-card" style="padding: 24px; max-width: 800px;">
        <form action="{{ route('admin.clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Name --}}
            <div style="margin-bottom: 18px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">Client / Company Name *</label>
                <input type="text" name="name" class="mk-input" style="width: 100%;" required value="{{ old('name') }}" placeholder="e.g. Dilip Buildcon Limited">
                @error('name')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Category --}}
            <div style="margin-bottom: 18px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">Category / Section *</label>
                <select name="category" class="mk-input" style="width: 100%;" required>
                    <option value="key_customer" {{ old('category') === 'key_customer' ? 'selected' : '' }}>Key Customers (Central India's Largest Enterprises)</option>
                    <option value="prime_customer" {{ old('category') === 'prime_customer' ? 'selected' : '' }}>Prime Customers (Our Prime Customers)</option>
                    <option value="oem" {{ old('category') === 'oem' ? 'selected' : '' }}>OEM Partners (Authorized Alliances)</option>
                </select>
                @error('category')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Subtitle / Tagline --}}
            <div style="margin-bottom: 18px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">Subtitle / Tagline (Optional)</label>
                <input type="text" name="subtitle" class="mk-input" style="width: 100%;" value="{{ old('subtitle') }}" placeholder="e.g. Roads & Highways Development">
                @error('subtitle')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Logo Upload --}}
            <div style="margin-bottom: 18px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">Client Logo (PNG, JPG, WEBP, SVG)</label>
                <input type="file" name="logo" class="mk-input" style="width: 100%;" accept="image/*">
                <span style="font-size: 0.75rem; color: #64748b; display: block; margin-top: 4px;">Recommended: Transparent PNG or crisp JPG logo. Max: 2MB.</span>
                @error('logo')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Website URL --}}
            <div style="margin-bottom: 18px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600;">Website URL (Optional)</label>
                <input type="url" name="website_url" class="mk-input" style="width: 100%;" value="{{ old('website_url') }}" placeholder="https://example.com">
                @error('website_url')<span style="color: #ef4444; font-size: 0.8rem; display: block; margin-top: 4px;">{{ $message }}</span>@enderror
            </div>

            {{-- Sort Order & Active --}}
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
                <div>
                    <label style="display: block; margin-bottom: 6px; font-weight: 600;">Display Order</label>
                    <input type="number" name="sort_order" class="mk-input" style="width: 100%;" value="{{ old('sort_order', 0) }}" min="0">
                    <span style="font-size: 0.75rem; color: #64748b;">Lower numbers appear first (e.g. 1, 2, 3...)</span>
                </div>

                <div style="display: flex; align-items: center; padding-top: 24px;">
                    <label style="display: flex; align-items: center; cursor: pointer;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="margin-right: 10px; width: 18px; height: 18px;">
                        <span style="font-weight: 600;">Active (Visible on website)</span>
                    </label>
                </div>
            </div>

            <div style="border-top: 1px solid #e2e8f0; padding-top: 18px; display: flex; gap: 12px;">
                <button type="submit" class="btn btn-primary" style="padding: 10px 24px;">
                    <i class="fa-solid fa-check"></i> Save Client
                </button>
                <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary" style="padding: 10px 24px;">Cancel</a>
            </div>
        </form>
    </div>

</div>
@endsection
