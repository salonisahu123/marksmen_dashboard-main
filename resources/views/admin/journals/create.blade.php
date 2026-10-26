@extends('admin.layouts.app')

@section('title', 'Add Journal')

@section('content')
<div class="mk-page">

    <div class="mk-filter-card" style="margin-bottom: 20px;">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Add Journal</strong>
                    <span>Create a new journal article</span>
                </div>
            </div>
            <a href="{{ route('admin.journals.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="mk-card" style="padding: 20px;">
        <form action="{{ route('admin.journals.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 500;">Title *</label>
                <input type="text" name="title" class="mk-input" style="width: 100%;" required value="{{ old('title') }}">
                @error('title')<span style="color:red; font-size: 0.8rem;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 500;">Category</label>
                <input type="text" name="category" class="mk-input" style="width: 100%;" value="{{ old('category') }}" placeholder="e.g. Products & Services">
                @error('category')<span style="color:red; font-size: 0.8rem;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 500;">Publish Date</label>
                <input type="date" name="publish_date" class="mk-input" style="width: 100%;" value="{{ old('publish_date', now()->format('Y-m-d')) }}">
                @error('publish_date')<span style="color:red; font-size: 0.8rem;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label style="display: block; margin-bottom: 5px; font-weight: 500;">Image</label>
                <input type="file" name="image" class="mk-input" style="width: 100%;" accept="image/*">
                @error('image')<span style="color:red; font-size: 0.8rem;">{{ $message }}</span>@enderror
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: flex; align-items: center; cursor: pointer;">
                    <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} style="margin-right: 10px; width: 16px; height: 16px;">
                    <span style="font-weight: 500;">Is Active</span>
                </label>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Save Journal</button>
            </div>
        </form>
    </div>
</div>
@endsection
