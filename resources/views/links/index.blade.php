@extends('layout.apps')
@section('content')
    <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">Link Management</h4>
            <a href="{{ route('links.create') }}" class="btn btn-success btn-sm float-right"><i class="fa-solid fa-plus"></i> Add New Link</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-muted">
                        <tr>
                            <th style="width: 80px;">Image</th>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Department</th>
                            <th>Description</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($links as $link)
                            <tr>
                                <td>
                                    @if($link->image)
                                        <img src="{{ asset('storage/' . $link->image) }}" alt="Link Image"
                                             style="width: 40px; height: 40px; object-fit: cover; border-radius: 8px; border: 1px solid #eee;">
                                    @else
                                        <div style="width: 40px; height: 40px; background: #f8f9fa; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #ccc; font-size: 10px; border: 1px solid #eee;">N/A</div>
                                    @endif
                                </td>
                                <td style="font-weight: 500; color: #111;">{{ $link->title }}</td>
                                <td><a href="{{ $link->url }}" target="_blank" style="color: #1d9e75; font-size: 13px;">{{ $link->url }}</a></td>
                                <td>
                                    <span class="badge bg-info" style="font-weight: 400; padding: 5px 10px;">{{ $link->department }}</span>
                                </td>
                                <td class="text-muted" style="font-size: 13px;">{{ Str::limit($link->description, 50) }}</td>
                                <td class="text-right">
                                    <div class="table-actions">
                                        <a href="{{ route('links.edit', $link->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('links.destroy', $link->id) }}" method="POST" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $links->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
