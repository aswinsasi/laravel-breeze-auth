@extends('adminlte::page')

@section('title', 'Role Management')

@section('content_header')
    <h1>Role Management</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3 class="card-title">Manage Roles</h3>
                @can('role-create')
                    <a class="btn btn-success btn-sm" href="{{ route('admin.roles.create') }}">
                        <i class="fas fa-plus"></i> Create New Role
                    </a>
                @endcan
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="100px">No</th>
                        <th>Name</th>
                        <th width="280px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{ route('admin.roles.show', $role->id) }}">
                                    <i class="fas fa-eye"></i> Show
                                </a>
                                @can('role-edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.edit', $role->id) }}">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                @endcan
                                
                                @can('role-delete')
                                    <form method="POST" action="{{ route('admin.roles.destroy', $role->id) }}" style="display:inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {!! $roles->links('pagination::bootstrap-5') !!}
        </div>
    </div>

    <p class="text-center text-primary"><small>Aswin</small></p>
@stop
