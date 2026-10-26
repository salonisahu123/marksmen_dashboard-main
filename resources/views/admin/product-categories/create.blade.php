@extends('admin.layouts.app')

@section('title', 'Add Product Category')

@section('content')
<div class="mk-page">
    <div class="mk-card" style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2>Add Product Category</h2>
        <form action="{{ route('admin.product-categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div style="margin-bottom: 15px;">
                <label>Name</label>
                <input type="text" name="name" class="mk-input" required style="width: 100%;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Status</label>
                <select name="status" class="mk-input" style="width: 100%;" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Image (Optional)</label>
                <input type="file" name="image" class="mk-input" style="width: 100%;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Description (Optional)</label>
                <textarea name="description" class="mk-input" style="width: 100%;" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Save Category</button>
        </form>
    </div>
</div>
@endsection
