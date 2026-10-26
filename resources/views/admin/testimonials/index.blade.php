@extends('admin.layouts.app')

@section('title', 'Client Testimonials')

@section('content')
<div class="mk-page">

    {{-- Header / Add Button --}}
    <div class="mk-filter-card">
        <div class="mk-filter-top">
            <div class="mk-filter-title">
                <div>
                    <strong>Client Testimonials & Video Stories</strong>
                    <span>Manage customer video deliveries, handover photos, and client reviews on the homepage</span>
                </div>
            </div>
            <a href="{{ route('admin.testimonials.create') }}" class="mk-create-btn">
                <i class="fa-solid fa-plus"></i> Add New Testimonial
            </a>
        </div>
    </div>

    {{-- Filter Bar --}}
    <div class="mk-card" style="padding: 16px 20px; margin-bottom: 20px;">
        <form method="GET" action="{{ route('admin.testimonials.index') }}" style="display: flex; gap: 12px; flex-wrap: wrap; align-items: center; margin: 0;">
            <div style="flex: 1; min-width: 200px;">
                <input type="text" name="search" class="mk-input" style="width: 100%;" placeholder="Search by name, designation or review..." value="{{ request('search') }}">
            </div>

            <div style="width: 180px;">
                <select name="card_type" class="mk-input" style="width: 100%;">
                    <option value="">All Types</option>
                    <option value="text" {{ request('card_type') === 'text' ? 'selected' : '' }}>Feedback / Review</option>
                    <option value="video" {{ request('card_type') === 'video' ? 'selected' : '' }}>Video Handover</option>
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

            @if(request()->hasAny(['search', 'card_type', 'status']))
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary" style="padding: 8px 16px;">Reset</a>
            @endif
        </form>
    </div>

    {{-- Table --}}
    <div class="mk-card">
        <div class="mk-table-wrap">
            <table class="mk-table">
                <thead>
                    <tr>
                        <th style="padding-left:17px; width: 110px;">MEDIA</th>
                        <th>TYPE</th>
                        <th>CLIENT / AUTHOR</th>
                        <th>DETAILS / REVIEW</th>
                        <th style="width: 90px;">RATING</th>
                        <th style="width: 90px;">ORDER</th>
                        <th style="width: 100px;">STATUS</th>
                        <th style="text-align:right; padding-right:17px; width: 160px;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($testimonials as $item)
                    <tr>
                        <td style="padding-left:17px;">
                            @if($item->image)
                                <div style="position: relative; width: 85px; height: 55px; border-radius: 6px; overflow: hidden; border: 1px solid #e2e8f0;">
                                    <img src="{{ asset('uploads/' . $item->image) }}" alt="{{ $item->author_name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    @if($item->card_type === 'video')
                                        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 0.9rem;">
                                            <i class="fa-solid fa-play"></i>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <div style="width: 85px; height: 55px; background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-size: 1.2rem;">
                                    <i class="fa-solid fa-comment-dots"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            @if($item->card_type === 'video')
                                <span class="badge" style="background: #fee2e2; color: #b91c1c; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">
                                    <i class="fa-solid fa-video"></i> Video
                                </span>
                            @else
                                <span class="badge" style="background: #e0f2fe; color: #0369a1; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">
                                    <i class="fa-solid fa-quote-left"></i> Review
                                </span>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $item->author_name }}</strong>
                            @if($item->author_designation)
                                <div style="font-size: 0.75rem; color: #64748b; font-weight: 600; text-transform: uppercase;">{{ $item->author_designation }}</div>
                            @endif
                        </td>
                        <td>
                            @if($item->card_type === 'video')
                                @if($item->video_id)
                                    <a href="https://www.youtube.com/watch?v={{ $item->video_id }}" target="_blank" style="display: inline-flex; align-items: center; gap: 6px; font-size: 0.8rem; color: #ef4444; font-weight: 600;">
                                        <i class="fa-brands fa-youtube"></i> YouTube (ID: {{ $item->video_id }})
                                    </a>
                                @else
                                    <span style="font-size: 0.8rem; color: #94a3b8;">No video ID specified</span>
                                @endif
                            @else
                                <div style="font-size: 0.85rem; color: #334155; line-height: 1.4; max-width: 380px;">
                                    "{{ Str::limit($item->content, 90) }}"
                                </div>
                            @endif
                        </td>
                        <td>
                            @if($item->card_type === 'text')
                                <div style="color: #f59e0b; font-size: 0.75rem; display: flex; gap: 2px;">
                                    @for($s = 1; $s <= 5; $s++)
                                        <i class="fa-solid fa-star {{ $s <= $item->rating ? '' : 'style=opacity:0.2' }}"></i>
                                    @endfor
                                </div>
                            @else
                                <span style="font-size: 0.8rem; color: #94a3b8;">—</span>
                            @endif
                        </td>
                        <td>
                            <span style="font-weight: 600; color: #475569;">#{{ $item->sort_order }}</span>
                        </td>
                        <td>
                            @if($item->is_active)
                                <span class="badge" style="background: #dcfce7; color: #15803d; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;">
                                    <i class="fa-solid fa-check"></i> Active
                                </span>
                            @else
                                <span class="badge" style="background: #f1f5f9; color: #64748b; padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; font-weight: 600;">Inactive</span>
                            @endif
                        </td>
                        <td style="text-align:right; padding-right:17px;">
                            <div style="display: flex; gap: 8px; justify-content: flex-end;">
                                <a href="{{ route('admin.testimonials.edit', $item) }}" class="btn btn-secondary" style="padding: 6px 12px; font-size: 0.8rem;">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.testimonials.destroy', $item) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this testimonial?');" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="padding: 6px 12px; font-size: 0.8rem;">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center; padding: 40px; color: #64748b;">
                            <i class="fa-solid fa-comments" style="font-size: 2rem; color: #cbd5e1; margin-bottom: 10px; display: block;"></i>
                            No testimonials found. Click "Add New Testimonial" above.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        @if($testimonials->hasPages())
            <div style="padding: 16px 20px; border-top: 1px solid #e2e8f0;">
                {{ $testimonials->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
