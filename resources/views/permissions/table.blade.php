    <div class="table-responsive">
        <table class="table ">
            <thead class="border-0">
                <tr>
                    <th class="text-center border-0  text-muted">Name</th>
                    <th class="text-right border-0 text-muted">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td class="text-center">{{ $permission->name }}</td>
                        <td class="text-right">
                            <a href="{{ route('permissions.edit', $permission->id) }}"
                                class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
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
