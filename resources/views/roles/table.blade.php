<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Role name</th>
                <th>Permissions</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>
                       {{ $role->name ?? '' }}
                    </td>
                    <td>
                        <div style="display:flex;flex-wrap:wrap;gap:5px;">
                            @forelse($role->permissions as $permission)
                                <span class="badge badge-success">{{ $permission->name }}</span>
                            @empty
                                <span class="text-muted" style="font-style:italic;font-size:12px;">No permissions</span>
                            @endforelse
                        </div>
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-secondary btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            @if($roles->isEmpty())
                <tr>
                    <td colspan="3" class="table-empty">
                        <i class="fas fa-shield-alt"></i>
                        No roles found. <a href="{{ route('roles.create') }}">Create one</a>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>