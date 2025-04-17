@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title">Edit User</h3>
            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name"><strong>Name:</strong></label>
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{ old('name', $user->name) }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email"><strong>Email:</strong></label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ old('email', $user->email) }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password"><strong>Password:</strong></label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="confirm-password"><strong>Confirm Password:</strong></label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="roles"><strong>Role:</strong></label>
                        <select name="roles[]" id="roles" class="form-control" multiple="multiple">
                            @foreach ($roles as $value => $label)
                                <option value="{{ $value }}" {{ isset($userRole[$value]) ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-sm mt-2 mb-3">
                        <i class="fas fa-save"></i> Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<p class="text-center text-muted mt-4"><small>Aswin</small></p>
@stop
