<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Image Profile</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->roles->count() > 0)
                                @foreach ($user->roles as $role)
                                    <span class="badge bg-primary">{{ $role->name }}</span>
                                @endforeach
                            @else
                                <span class="text-muted">No role</span>
                            @endif
                        </td>
                        <td>
                            @if ($user->image)
                                <img src="{{  $user->image_url }}" alt="Profile Image" width="50" height="50">
                            @else
                                N/A
                            @endif
                        <td class="text-right">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>