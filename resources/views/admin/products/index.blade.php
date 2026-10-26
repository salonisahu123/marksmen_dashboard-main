@extends('admin.layouts.app')

@section('title', 'Products')

@section('content')
<div class="mk-page">

    <div class="mk-filter-card">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Products</strong>
                    <span>Manage all products</span>
                </div>
            </div>
            <a href="{{ route('admin.products.create') }}" class="mk-create-btn">
                <i class="bi bi-plus-lg"></i> Add Product
            </a>
        </div>
    </div>

    <div class="mk-card">
        <div class="mk-table-wrap">
            <table class="mk-table">
                <thead>
                    <tr>
                        <th style="padding-left:17px;">IMAGE</th>
                        <th>NAME</th>
                        <th>CATEGORY</th>
                        <th>STATUS</th>
                        <th style="text-align:right;padding-right:17px;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td style="padding-left:17px;">
                            @if($product->image)
                                <img src="{{ asset('uploads/' . $product->image) }}" width="50" style="border-radius: 4px;">
                            @else
                                <div style="width:50px;height:50px;background:#eee;border-radius:4px;"></div>
                            @endif
                        </td>
                        <td><strong>{{ $product->name }}</strong></td>
                        <td>{{ $product->category->name ?? 'N/A' }}</td>
                        <td>
                            @if($product->status === 'active')
                                <span class="mk-status active">Active</span>
                            @else
                                <span class="mk-status inactive">Inactive</span>
                            @endif
                        </td>
                        <td style="text-align:right;padding-right:17px;">
                            <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" style="text-align:center;">No products found.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        @if($products->hasPages())
            <div style="padding: 15px;">{{ $products->links() }}</div>
        @endif
    </div>
</div>
@endsection
