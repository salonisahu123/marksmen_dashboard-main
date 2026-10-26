@extends('admin.layouts.app')

@section('title', 'Clients & Customers')

@section('content')
<div class="mk-page">

    {{-- Header / Add Button --}}
    <div class="mk-filter-card">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Clients & Key Customers</strong>
                    <span>Manage all client logos, prime customers, and OEM partner listings</span>
                </div>
            </div>
            <a href="{{ route('admin.clients.create') }}" class="mk-create-btn">
                <i class="fa-solid fa-plus"></i> Add New Client
            </a>
        </div>
    </div>

    {{-- Filter Bar --}}
    <div class="mk-card" style="padding: 16px 20px; margin-bottom: 20px;">
        <form method="GET" action="{{ route('admin.clients.index') }}" style="display: flex; gap: 12px; flex-wrap: wrap; align-items: center; margin: 0;">
            <div style="flex: 1; min-width: 200px;">
                <input type="text" name="search" class="mk-input" style="width: 100%;" placeholder="Search by client name..." value="{{ request('search') }}">
            </div>

            <div style="width: 200px;">
                <select name="category" class="mk-input" style="width: 100%;">
                    <option value="">All Categories</option>
                    <option value="key_customer" {{ request('category') === 'key_customer' ? 'selected' : '' }}>Key Customers</option>
                    <option value="prime_customer" {{ request('category') === 'prime_customer' ? 'selected' : '' }}>Prime Customers</option>
                    <option value="oem" {{ request('category') === 'oem' ? 'selected' : '' }}>OEM Partners</option>
                </select>
            </div>

            <div style="width: 140px;">
                <select name="status" class="mk-input" style="width: 100%;">
                    <option value="">All Status</option>
                    <option value="active" {{ request('status') === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" style="padding: 8px 16px;">
                <i class="fa-solid fa-filter"></i> Filter
            </button>

            @if(request()->hasAny(['search', 'category', 'status']))
                <a href="{{ route('admin.clients.index') }}" class="btn btn-secondary" style="padding: 8px 16px;">Reset</a>
            @endif
        </form>
    </div>

    {{-- Clients Table --}}
    <div class="mk-card">
        <div class="mk-table-wrap">
            <table class="mk-table">
                <thead>
                    <tr>
                        <th style="padding-left:17px; width: 120px;">LOGO</th>
                        <th>NAME</th>
                        <th>CATEGORY</th>
                        <th>SUBTITLE / TAGLINE</th>
                        <th style="width: 100px;">ORDER</th>
                        <th style="width: 100px;">STATUS</th>
                        <th style="text-align:right; padding-right:17px; width: 160px;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($clients as $client)
                    <tr>
                        <td style="padding-left:17px;">
                            @if($client->logo)
                                <div style="background: #fff; padding: 4px; border: 1px solid #e2e8f0; border-radius: 6px; width: 90px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <img src="{{ asset('uploads/' . $client->logo) }}" alt="{{ $client->name }}" style="max-height: 42px; max-width: 82px; object-fit: contain;">
                                </div>
                            @else
                                <div style="width: 90px; height: 50px; background: #f1f5f9; border: 1px dashed #cbd5e1; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.85rem; color: #64748b;">
                                    {{ Str::limit($client->name, 8) }}
                                </div>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $client->name }}</strong>
                            @if($client->website_url)
                                <div><a href="{{ $client->website_url }}" target="_blank" style="font-size: 0.75rem; color: var(--accent);"><i class="fa-solid fa-arrow-up-right-from-square"></i> Visit Link</a></div>
                            @endif
                        </td>
                        <td>
                            @if($client->category === 'key_customer')
                                <span class="badge" style="background: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;">Key Customer</span>
                            @elseif($client->category === 'prime_customer')
                                <span class="badge" style="background: #fef3c7; color: #b45309; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;">Prime Customer</span>
                            @else
                                <span class="badge" style="background: #f3e8ff; color: #7e22ce; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;">OEM Partner</span>
                            @endif
                        </td>
                        <td>{{ $client->subtitle ?? '—' }}</td>
                        <td>#{{ $client->sort_order }}</td>
                        <td>
                            @if($client->is_active)
                                <span class="mk-status active">Active</span>
                            @else
                                <span class="mk-status inactive">Inactive</span>
                            @endif
                        </td>
                        <td style="text-align:right; padding-right:17px;">
                            <a href="{{ route('admin.clients.edit', $client) }}" class="btn btn-sm btn-primary" style="margin-right: 4px;">Edit</a>
                            <form action="{{ route('admin.clients.destroy', $client) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this client?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align:center; padding: 40px 20px; color: #64748b;">
                            <i class="fa-solid fa-users-slash" style="font-size: 2rem; margin-bottom: 10px; display: block;"></i>
                            No clients or customers found.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($clients->hasPages())
            <div style="padding: 16px 20px;">
                {{ $clients->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
