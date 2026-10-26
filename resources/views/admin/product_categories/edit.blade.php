@extends('admin.layouts.app')

@section('title', 'Edit Product Category')

@section('content')
<div class="mk-page">

    <div class="mk-page-header">
        <div>
            <div class="mk-eyebrow">CONTENT MANAGEMENT</div>
            <h1>Edit Product Category</h1>
            <p>Update the details and availability of this productCategory.</p>
        </div>

        <a href="{{ route('admin.product-categories.index') }}" class="mk-secondary-btn">
            Back to Categories
        </a>
    </div>

    <div class="mk-form-card">
        <div class="mk-form-head">
            <div>
                <div class="mk-section-label">CATEGORY INFORMATION</div>
                <h2>Update Product Category</h2>
                <p>Make the required changes and save the productCategory.</p>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.product-categories.update', $productCategory) }}" class="mk-form">
            @csrf
            @method('PUT')

            @include('admin.product-categories.form')

            <div class="mk-form-actions">
                <a href="{{ route('admin.product-categories.index') }}" class="mk-secondary-btn">
                    Cancel
                </a>
                <button type="submit" class="mk-primary-btn">
                    Update Product Category
                </button>
            </div>
        </form>
    </div>

</div>
@endsection
