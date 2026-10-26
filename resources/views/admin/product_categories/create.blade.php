@extends('admin.layouts.app')

@section('title', 'Create Gallery Product Category')

@section('content')
<div class="mk-page">

    <div class="mk-page-header">
        <div>
            <div class="mk-eyebrow">CONTENT MANAGEMENT</div>
            <h1>Add Gallery Product Category</h1>
            <p>Create a new gallery productCategory for your website.</p>
        </div>

        <a href="{{ route('admin.product-categories.index') }}" class="mk-secondary-btn">
            Back to Product Categories
        </a>
    </div>

    <div class="mk-form-card">
        <div class="mk-form-head">
            <div>
                <div class="mk-section-label">GALLERY CATEGORY INFORMATION</div>
                <h2>Create Gallery Product Category</h2>
                <p>Enter the basic details for this gallery productCategory.</p>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.product-categories.store') }}" class="mk-form">
            @csrf

            @include('admin.product-categories.form')

            <div class="mk-form-actions">
                <a href="{{ route('admin.product-categories.index') }}" class="mk-secondary-btn">
                    Cancel
                </a>
                <button type="submit" class="mk-primary-btn">
                    Save Gallery Product Category
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
