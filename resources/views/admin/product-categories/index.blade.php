@extends('admin.layouts.app')

@section('title', 'Product Categories')

@section('content')
<div class="mk-page">

    <div class="mk-filter-card">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Product Categories</strong>
                    <span>Manage all product categories</span>
                </div>
            </div>
            <a href="{{ route('admin.product-categories.create') }}" class="mk-create-btn">
                <i class="bi bi-plus-lg"></i> Add Category
            </a>
        </div>
    </div>

    <div class="mk-card">
        <div class="mk-table-wrap">
            <table class="mk-table">
                <thead>
                    <tr>
                        <th style="padding-left:17px;">NAME</th>
                        <th>SLUG</th>
                        <th>STATUS</th>
                        <th style="text-align:right;padding-right:17px;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td style="padding-left:17px;"><strong>{{ $category->name }}</strong></td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            @if($category->status === 'active')
                                <span class="mk-status active">Active</span>
                            @else
                                <span class="mk-status inactive">Inactive</span>
                            @endif
                        </td>
                        <td style="text-align:right;padding-right:17px;">
                            <a href="{{ route('admin.product-categories.edit', $category) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.product-categories.destroy', $category) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" style="text-align:center;">No product categories found.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
        @if($categories->hasPages())
            <div style="padding: 15px;">{{ $categories->links() }}</div>
        @endif
    </div>
</div>
@endsection
