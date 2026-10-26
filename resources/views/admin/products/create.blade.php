@extends('admin.layouts.app')

@section('title', 'Add Product')

@section('content')
<div class="mk-page">
    <div class="mk-card" style="max-width: 800px; margin: 0 auto; padding: 20px;">
        <h2>Add Product</h2>
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div style="margin-bottom: 15px;">
                <label>Category</label>
                <select name="product_category_id" class="mk-input" style="width: 100%;" required>
                    <option value="">Select Category...</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

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
                <label>Image</label>
                <input type="file" name="image" class="mk-input" style="width: 100%;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Description (Optional)</label>
                <textarea name="description" class="mk-input" style="width: 100%;" rows="4"></textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Specifications (One per line)</label>
                <textarea name="specifications[]" class="mk-input" style="width: 100%;" rows="4" placeholder="Bias&#10;LS-2&#10;TL"></textarea>
                <small style="color: #666;">Enter one specification per line.</small>
            </div>

            <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Save Product</button>
        </form>
    </div>
</div>

<script>
    // Convert newlines to array inputs before submit
    document.querySelector('form').addEventListener('submit', function(e) {
        let specTextarea = document.querySelector('textarea[name="specifications[]"]');
        let lines = specTextarea.value.split('\n').filter(line => line.trim() !== '');
        
        // Remove original textarea
        specTextarea.remove();
        
        // Create hidden inputs for each line
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
