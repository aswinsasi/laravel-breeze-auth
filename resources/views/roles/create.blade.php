@extends('adminlte::page')

@section('title', 'Create Role')

@section('content_header')
    <h1>Create New Role</h1>
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

            <form method="POST" action="{{ route('admin.roles.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name"><strong>Name:</strong></label>
                    <input type="text" id="name" name="name" placeholder="Role Name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><strong>Permissions:</strong></label>
                    <br />
                    @foreach($permission as $value)
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="permission[{{$value->id}}]" value="{{$value->id}}" class="custom-control-input" id="permission{{$value->id}}">
                            <label class="custom-control-label" for="permission{{$value->id}}">{{ $value->name }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>

    <p class="text-center text-primary"><small>Aswin</small></p>
@stop
