@extends('layout.apps')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ __('Update permission') }}</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('permissions.update',$permission->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label name="name">{{ 'Permission Name' }}</label>
                    <input type="text" name="name" value="{{ old('name',$permission->name) }}" class="form-control">
                </div>
                <div class="form-group float-right">
                    <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-success">Save Change</button>
                </div>
            </form>
        </div>
    </div>
@endsection
