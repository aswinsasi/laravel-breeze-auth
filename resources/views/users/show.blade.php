@extends('adminlte::page')

@section('title', 'Show User')

@section('content_header')
    <h1>Show User</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title">User Details</h3>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label><strong>Name:</strong></label>
                    <p>{{ $user->name }}</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label><strong>Email:</strong></label>
                    <p>{{ $user->email }}</p>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label><strong>Roles:</strong></label>
                    <div>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <span class="badge bg-success text-white me-2">{{ $v }}</span>
                            @endforeach
                        @else
                            <span class="text-muted">No roles assigned</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<p class="text-center text-muted mt-4"><small>Aswin</small></p>
@stop
