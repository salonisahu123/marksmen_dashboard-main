@extends('admin.layouts.app')

@section('title', 'Categories')

@section('content')
<div class="mk-page">

    {{-- PAGE HEADER --}}


    {{-- FILTER --}}
    <div class="mk-filter-card">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Search & Filter</strong>
                    <span>Find categories quickly</span>
                </div>
            </div>
            <a href="{{ route('admin.product-categories.create') }}" class="mk-create-btn">
            <i class="bi bi-plus-lg"></i>
            Add Product Category
        </a>
        </div>

        <form method="GET" action="{{ route('admin.product-categories.index') }}">
            <div class="mk-filter-row">

                <div class="mk-field">
                    <label for="productCategory-search">Search</label>
                    <div class="mk-input-wrap">
                        <i class="bi bi-search"></i>
                        <input
                            id="productCategory-search"
                            type="text"
                            name="search"
                            class="mk-input"
                            placeholder="Search productCategory..."
                            value="{{ request('search') }}"
                        >
                    </div>
                </div>

                <div class="mk-field">
                    <label for="productCategory-status">Status</label>
                    <div class="mk-select-wrap">
                        <select id="productCategory-status" name="status" class="mk-select">
                            <option value="">All Status</option>
                            <option value="active" @selected(request('status') === 'active')>Active</option>
                            <option value="inactive" @selected(request('status') === 'inactive')>Inactive</option>
                        </select>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>

                <div class="mk-filter-actions">
                    <button type="submit" class="mk-search-btn">
                        <i class="bi bi-search"></i> Search
                    </button>

                    <a href="{{ route('admin.product-categories.index') }}" class="mk-reset-btn">
                        <i class="bi bi-arrow-counterclockwise"></i> Reset
                    </a>
                </div>

            </div>
        </form>
    </div>

    {{-- CATEGORY TABLE --}}
    <div class="mk-card">

        <div class="mk-card-head">
            <div>
                <span class="mk-section-label">CATEGORY LIBRARY</span>
                <h2>All Categories</h2>
                <p>Manage productCategory names, slugs and availability.</p>
            </div>

            <div class="mk-total">
                <strong>{{ $categories->total() }}</strong>
                categories
            </div>
        </div>

        <div class="mk-table-wrap">
            <table class="mk-table">
                <thead>
                    <tr>
                        <th style="width:65px;padding-left:17px;">ID</th>
                        <th>CATEGORY</th>
                        <th>SLUG</th>
                        <th>STATUS</th>
                        <th>CREATED</th>
                        <th style="width:205px;text-align:right;padding-right:17px;">ACTIONS</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($categories as $productCategory)
                    <tr>

                        <td style="padding-left:17px;">
                            <span class="mk-id">#{{ $productCategory->id }}</span>
                        </td>

                        <td>
                            <div class="mk-productCategory">

                                <div class="mk-productCategory-info">
                                    <strong>{{ $productCategory->name }}</strong>

                                    @if($productCategory->description)
                                        <span>{{ Str::limit($productCategory->description, 60) }}</span>
                                    @else
                                        <span class="no-description">No description added</span>
                                    @endif
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="mk-slug">{{ $productCategory->slug }}</span>
                        </td>

                        <td>
                            @if($productCategory->status === 'active')
                                <span class="mk-status active">Active</span>
                            @else
                                <span class="mk-status inactive">Inactive</span>
                            @endif
                        </td>

                        <td>
                            <div class="mk-date">
                                <strong>{{ $productCategory->created_at->format('d M Y') }}</strong>
                                <span>{{ $productCategory->created_at->format('h:i A') }}</span>
                            </div>
                        </td>

                        <td>
                            <div class="mk-actions">

                                <a
                                    href="{{ route('admin.product-categories.show', $productCategory) }}"
                                    class="mk-action view"
                                    title="View"
                                >
                                    <i class="bi bi-eye"></i>
                                    <span>View</span>
                                </a>

                                <a
                                    href="{{ route('admin.product-categories.edit', $productCategory) }}"
                                    class="mk-action edit"
                                    title="Edit"
                                >
                                    <i class="bi bi-pencil"></i>
                                    <span>Edit</span>
                                </a>

                                <form
                                    action="{{ route('admin.product-categories.destroy', $productCategory) }}"
                                    method="POST"
                                    class="mk-delete-form"
                                    onsubmit="return confirm('Are you sure you want to delete this productCategory?')"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="mk-action delete" title="Delete">
                                        <i class="bi bi-trash3"></i>
                                        <span>Delete</span>
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <div class="mk-empty">
                                <div class="mk-empty-icon">
                                    <i class="bi bi-folder-x"></i>
                                </div>
                                <h3>No Categories Found</h3>
                                <p>No categories match your current search or filter.</p>

                                <a href="{{ route('admin.product-categories.create') }}">
                                    <i class="bi bi-plus-lg"></i> Create Product Category
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        {{-- WORKING PAGINATION --}}
        @if($categories->hasPages())

            @php
                // Keep search/status parameters when changing pages.
                $query = request()->query();
                $currentPage = $categories->currentPage();
                $lastPage = $categories->lastPage();
                $startPage = max(1, $currentPage - 2);
                $endPage = min($lastPage, $currentPage + 2);
            @endphp

            <div class="mk-pagination">

                <div class="mk-pagination-info">
                    <span>Showing</span>
                    <strong>{{ $categories->firstItem() ?? 0 }}</strong>
                    <span>–</span>
                    <strong>{{ $categories->lastItem() ?? 0 }}</strong>
                    <span>of</span>
                    <strong>{{ $categories->total() }}</strong>
                    <span>categories</span>
                </div>

                <nav class="mk-pagination-nav" aria-label="Categories pagination">

                    @if($categories->onFirstPage())
                        <span class="mk-page-btn disabled">
                            <i class="bi bi-chevron-left"></i>
                            <span>Previous</span>
                        </span>
                    @else
                        <a
                            href="{{ $categories->appends($query)->previousPageUrl() }}"
                            class="mk-page-btn"
                        >
                            <i class="bi bi-chevron-left"></i>
                            <span>Previous</span>
                        </a>
                    @endif

                    <div class="mk-page-list">

                        @if($startPage > 1)
                            <a href="{{ $categories->appends($query)->url(1) }}" class="mk-page-number">1</a>

                            @if($startPage > 2)
                                <span class="mk-page-dots">...</span>
                            @endif
                        @endif

                        @for($page = $startPage; $page <= $endPage; $page++)
                            @if($page == $currentPage)
                                <span class="mk-page-number active">{{ $page }}</span>
                            @else
                                <a
                                    href="{{ $categories->appends($query)->url($page) }}"
                                    class="mk-page-number"
                                >
                                    {{ $page }}
                                </a>
                            @endif
                        @endfor

                        @if($endPage < $lastPage)
                            @if($endPage < $lastPage - 1)
                                <span class="mk-page-dots">...</span>
                            @endif

                            <a
                                href="{{ $categories->appends($query)->url($lastPage) }}"
                                class="mk-page-number"
                            >
                                {{ $lastPage }}
                            </a>
                        @endif

                    </div>

                    @if($categories->hasMorePages())
                        <a
                            href="{{ $categories->appends($query)->nextPageUrl() }}"
                            class="mk-page-btn"
                        >
                            <span>Next</span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    @else
                        <span class="mk-page-btn disabled">
                            <span>Next</span>
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    @endif

                </nav>
            </div>

        @endif

    </div>

</div>
@endsection
