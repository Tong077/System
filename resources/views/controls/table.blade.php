<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
               
                <th>Status</th>
                <th class="text-center">Logo</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ss as $system)
                <tr>
                    <td>{{ $system->name ?? '-' }}</td>
                    <td>{{ $system->type ?? '-' }}</td>
                   
                    <td>
                        <span class="badge 
                            {{ $system->status === 'active' ? 'badge-success' : 'badge-secondary' }}">
                            {{ strtoupper($system->status ?? '-') }}
                        </span>
                    </td>
                    <td class="text-center">
                        @if ($system->logo)
                            <img src="{{ asset('storage/' . $system->logo) }}" 
                                 alt="logo" 
                                 style="height:40px;">
                        @else
                            -
                        @endif
                    </td>
                    <td class="text-right">
                        <div class="table-actions">
                            <a href="{{ route('controls.edit', $system->id) }}" 
                               class="btn btn-secondary btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('controls.destroy', $system->id) }}" 
                                  method="POST" 
                                  class="delete-form d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            @if($ss->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">
                        No systems found
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>