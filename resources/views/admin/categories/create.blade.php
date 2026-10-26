@extends('admin.layouts.app')

@section('title', 'Create Gallery Category')

@section('content')
<div class="mk-page">

    <div class="mk-page-header">
        <div>
            <div class="mk-eyebrow">CONTENT MANAGEMENT</div>
            <h1>Add Gallery Category</h1>
            <p>Create a new gallery category for your website.</p>
        </div>

        <a href="{{ route('admin.categories.index') }}" class="mk-secondary-btn">
            Back to Gallery Categories
        </a>
    </div>

    <div class="mk-form-card">
        <div class="mk-form-head">
            <div>
                <div class="mk-section-label">GALLERY CATEGORY INFORMATION</div>
                <h2>Create Gallery Category</h2>
                <p>Enter the basic details for this gallery category.</p>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.categories.store') }}" class="mk-form">
            @csrf

            @include('admin.categories.form')

            <div class="mk-form-actions">
                <a href="{{ route('admin.categories.index') }}" class="mk-secondary-btn">
                    Cancel
                </a>
                <button type="submit" class="mk-primary-btn">
                    Save Gallery Category
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
