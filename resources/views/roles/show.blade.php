@extends('adminlte::page')

@section('title', 'Show Role')

@section('content_header')
    <h1>Show Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Role Details</h3>
                <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.index') }}">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <p>{{ $role->name }}</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Permissions:</strong>
                        <br/>
                        @if(!empty($rolePermissions))
                            @foreach($rolePermissions as $v)
                                <span class="badge badge-success">{{ $v->name }}</span>
                            @endforeach
                        @else
                            <p>No permissions assigned</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="text-center text-primary"><small>Aswin</small></p>
@stop
