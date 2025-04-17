@extends('adminlte::page')

@section('title', 'Create New User')

@section('content_header')
    <h1>Create New User</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title">Add User</h3>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Please fix the following issues:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <div class="form-group">
                <label for="name"><strong>Name:</strong></label>
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email"><strong>Email:</strong></label>
                <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password"><strong>Password:</strong></label>
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

            <div class="form-group">
                <label for="confirm-password"><strong>Confirm Password:</strong></label>
                <input type="password" name="confirm-password" placeholder="Confirm Password" class="form-control">
            </div>

            <div class="form-group">
                <label for="roles"><strong>Role:</strong></label>
                <select name="roles[]" class="form-control" multiple>
                    @foreach ($roles as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i> Submit
                </button>
            </div>
        </form>
    </div>
</div>

<p class="text-center text-muted"><small>Aswin</small></p>
@stop
