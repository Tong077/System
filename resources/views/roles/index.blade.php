@extends('layout.apps')
@section('content')
    <div class="card">
       <div class="card-header">
            <h4 class="card-title text-muted">{{ __('Roles') }} </h4>
            <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm float-right"><i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="card-body">
            @include('roles.table')
        </div>
    </div>
@endsection