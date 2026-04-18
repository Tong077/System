@extends('layout.apps')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header">
                <h4 class="card-title">Update Role</h4>
            </div>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('roles.update', $role->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name', $role->name) }}" required autocomplete="name"
                                autofocus>

                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <strong>Permission:</strong>

                    <div class="row mt-2">

                        @foreach ($permission as $value)
                            <div class="col-md-4 mb-2"> <!-- 3 per row -->
                                <div class="form-check form-switch">

                                    <input class="form-check-input" type="checkbox" name="permission[]"
                                        value="{{ $value->id }}" id="permission{{ $value->id }}" {{-- Auto-check if permission exists in role --}}
                                        {{ in_array($value->id, old('permission', $role->permissions->pluck('id')->toArray())) ? 'checked' : '' }}>

                                    <label class="form-check-label" for="permission{{ $value->id }}">
                                        {{ $value->name }}
                                    </label>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


                <div class="form-group mt-2 float-right">
                    <a href="{{ route('roles.index') }}" class="btn btn-sm btn-outline-secondary"><i
                            class="fas fa-window-close"></i> Cancel</a>
                    <button type="submit" class="btn btn-sm btn-outline-success"><i class="fas fa-save"></i>
                        Save Change</button>

                </div>
            </form>
        </div>
    </div>
@endsection
