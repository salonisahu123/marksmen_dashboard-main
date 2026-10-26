@extends('admin.layouts.app')

@section('title', 'Edit Product Category')

@section('content')
<div class="mk-page">
    <div class="mk-card" style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2>Edit Product Category</h2>
        <form action="{{ route('admin.product-categories.update', $productCategory) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            
            <div style="margin-bottom: 15px;">
                <label>Name</label>
                <input type="text" name="name" class="mk-input" required style="width: 100%;" value="{{ $productCategory->name }}">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Status</label>
                <select name="status" class="mk-input" style="width: 100%;" required>
                    <option value="active" @selected($productCategory->status == 'active')>Active</option>
                    <option value="inactive" @selected($productCategory->status == 'inactive')>Inactive</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Image (Optional)</label>
                @if($productCategory->image)
                    <div style="margin-bottom: 10px;"><img src="{{ asset('uploads/' . $productCategory->image) }}" width="100"></div>
                @endif
                <input type="file" name="image" class="mk-input" style="width: 100%;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Description (Optional)</label>
                <textarea name="description" class="mk-input" style="width: 100%;" rows="4">{{ $productCategory->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Update Category</button>
        </form>
    </div>
</div>
@endsection
