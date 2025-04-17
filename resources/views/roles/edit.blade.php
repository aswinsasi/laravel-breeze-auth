@extends('adminlte::page')

@section('title', 'Edit Role')

@section('content_header')
    <h1>Edit Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Role Information</h3>
                <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary btn-sm"><i class="fas fa-arrow-left"></i> Back</a>
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

            <form method="POST" action="{{ route('admin.roles.update', $role->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="name"><strong>Name:</strong></label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Role Name" value="{{ $role->name }}" required>
                </div>

                <div class="form-group">
                    <label><strong>Permissions:</strong></label>
                    <div class="row">
                        @foreach($permission as $value)
                            <div class="col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="permission[{{$value->id}}]" value="{{$value->id}}" class="custom-control-input" id="permission{{$value->id}}" {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="permission{{$value->id}}">{{ $value->name }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>

    <p class="text-center text-primary"><small>Aswin</small></p>
@stop
