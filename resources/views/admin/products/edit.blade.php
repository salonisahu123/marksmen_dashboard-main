@extends('admin.layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="mk-page">
    <div class="mk-card" style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <h2>Edit Product</h2>
        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            
            <div style="margin-bottom: 15px;">
                <label>Category</label>
                <select name="product_category_id" class="mk-input" style="width: 100%;" required>
                    <option value="">Select Category...</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" @selected($product->product_category_id == $cat->id)>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Name</label>
                <input type="text" name="name" class="mk-input" required style="width: 100%;" value="{{ $product->name }}">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Status</label>
                <select name="status" class="mk-input" style="width: 100%;" required>
                    <option value="active" @selected($product->status == 'active')>Active</option>
                    <option value="inactive" @selected($product->status == 'inactive')>Inactive</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Image (Optional)</label>
                @if($product->image)
                    <div style="margin-bottom: 10px;"><img src="{{ asset('uploads/' . $product->image) }}" width="100"></div>
                @endif
                <input type="file" name="image" class="mk-input" style="width: 100%;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Description (Optional)</label>
                <textarea name="description" class="mk-input" style="width: 100%;" rows="4">{{ $product->description }}</textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Specifications (One per line)</label>
                @php
                    $specStr = is_array($product->specifications) ? implode("\n", $product->specifications) : '';
                @endphp
                <textarea name="specifications[]" class="mk-input" style="width: 100%;" rows="4" placeholder="Bias&#10;LS-2&#10;TL">{{ $specStr }}</textarea>
                <small style="color: #666;">Enter one specification per line.</small>
            </div>

            <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Update Product</button>
        </form>
    </div>
</div>

<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        let specTextarea = document.querySelector('textarea[name="specifications[]"]');
        let lines = specTextarea.value.split('\n').filter(line => line.trim() !== '');
        
        specTextarea.remove();
        
        lines.forEach(line => {
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'specifications[]';
            input.value = line.trim();
            this.appendChild(input);
        });
    });
</script>
@endsection
