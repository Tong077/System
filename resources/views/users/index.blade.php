@extends('layout.apps')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-muted">User </h4>
            <a href="{{ route('users.create') }}" class="btn btn-success btn-sm float-right"><i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="card-body">
            @include('users.table')
        </div>
    </div>
@endsection
