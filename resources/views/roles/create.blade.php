@extends('layout.apps')
@section('content')
    <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">Add Roles</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <label name="name">{{ __('Role Name') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <strong>Permission:</strong>
                        <div class="row mt-2">

                            @foreach ($permission as $value)
                                <div class="col-md-4 mb-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                            name="permission[{{ $value->id }}]" value="{{ $value->id }}"
                                            id="permission{{ $value->id }}">

                                        <label class="form-check-label" for="permission{{ $value->id }}">
                                            {{ $value->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
                <div class="form-group float-right">
                    <a href="{{ route('roles.index') }}" class="btn btn-sm btn-danger">Cancel</a>

                    <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Save </button>
                </div>
            </form>
        </div>
    </div>
@endsection
