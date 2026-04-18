    <div class="table-responsive">
        <table class="table ">
            <thead class="border-0">
                <tr>
                    <th class="text-center border-0  text-muted">{{ __('Role Name') }}</th>
                    <th class="text-center border-0  text-muted">{{ __('Permission Name') }}</th>
                    <th class="text-right border-0 text-muted">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td class="text-center">{{ $role->name ?? '' }}</td>
                        <td class="text-center">
                            @forelse($role->permissions as $permission)
                                <span class="badge bg-success">{{ $permission->name }}</span>
                            @empty
                            @endforelse
                        </td>
                        <td class="text-right">
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                class="delete-form" style="display:inline-block;">
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
