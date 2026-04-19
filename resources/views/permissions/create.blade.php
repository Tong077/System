@extends('layout.apps')
@section('content')
    <div class="card p-2">
        <div class="card-header">
            <h4 class="card-title">{{ __('Add new permission') }}</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('permissions.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label name="name">{{ 'Permission Name' }}</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group float-right">
                    <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-danger">Cancel</a>
                    <button type="submit" name="action" value="save_new" class="btn btn-sm btn-secondary">Save new</button>
                    <button type="submit" class="btn btn-sm btn-success">Save Exist</button>
                </div>
            </form>
        </div>
    </div>
@endsection
