@extends('adminlte::page')

@section('title', 'Users Management')

@section('content_header')
    <h1>Users Management</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">All Users</h3>
        <a class="btn btn-success btn-sm" href="{{ route('admin.users.create') }}">
            <i class="fas fa-plus"></i> Create New User
        </a>
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success" role="alert"> 
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 50px">No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th style="width: 220px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i => $user)
                    <tr>
                        <td>{{ $data->firstItem() + $i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->getRoleNames() as $v)
                                <span class="badge bg-success">{{ $v }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('admin.users.show',$user->id) }}">
                                <i class="fas fa-eye"></i> Show
                            </a>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit',$user->id) }}">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this user?')">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            {!! $data->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

<p class="text-center text-muted mt-4"><small>Aswin</small></p>
@stop
