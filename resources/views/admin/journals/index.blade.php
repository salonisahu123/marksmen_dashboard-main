@extends('admin.layouts.app')

@section('title', 'Journals')

@section('content')
<div class="mk-page">

    <div class="mk-filter-card">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Journals</strong>
                    <span>Manage all journal articles</span>
                </div>
            </div>
            <a href="{{ route('admin.journals.create') }}" class="mk-create-btn">
                <i class="bi bi-plus-lg"></i> Add Journal
            </a>
        </div>
    </div>

    <div class="mk-card">
        <div class="mk-table-wrap">
            <table class="mk-table">
                <thead>
                    <tr>
                        <th style="padding-left:17px;">IMAGE</th>
                        <th>TITLE</th>
                        <th>CATEGORY</th>
                        <th>PUBLISHED</th>
                        <th>STATUS</th>
                        <th style="text-align:right;padding-right:17px;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($journals as $journal)
                    <tr>
                        <td style="padding-left:17px;">
                            @if($journal->image)
                                <img src="{{ asset('uploads/' . $journal->image) }}" width="80" style="border-radius: 4px; aspect-ratio: 16/9; object-fit: cover;">
                            @else
                                <div style="width:80px;height:45px;background:#eee;border-radius:4px;"></div>
                            @endif
                        </td>
                        <td><strong>{{ $journal->title }}</strong></td>
                        <td>{{ $journal->category ?? 'N/A' }}</td>
                        <td>{{ $journal->publish_date ? \Carbon\Carbon::parse($journal->publish_date)->format('d M, Y') : 'N/A' }}</td>
                        <td>
                            @if($journal->is_active)
                                <span class="mk-status active">Active</span>
                            @else
                                <span class="mk-status inactive">Inactive</span>
                            @endif
                        </td>
                        <td style="text-align:right;padding-right:17px;">
                            <a href="{{ route('admin.journals.edit', $journal) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('admin.journals.destroy', $journal) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this journal?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" style="text-align:center;">No journals found.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
