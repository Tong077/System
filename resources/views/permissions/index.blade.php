@extends('layout.apps')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-muted">Permissions List</h3>
            <a href="{{ route('permissions.create') }}" class="btn btn-success btn-sm float-right"><i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="border-0">
                        <tr>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <a href="{{ route('permissions.edit', $permission->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
