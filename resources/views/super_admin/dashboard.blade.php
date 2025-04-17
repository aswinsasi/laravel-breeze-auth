@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Super Admin Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="text-2xl font-bold mb-4">
                        {{ __('Welcome,') }} {{ Auth::user()->name }} 👋
                    </h3>

                    <p class="mb-4 text-gray-600">
                        You are logged in as <strong>Super Admin</strong>. Use the options below to manage the application.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Manage Roles --}}
                        <div class="p-4 bg-purple-100 rounded-lg shadow">
                            <h4 class="font-semibold text-lg mb-2">🔐 Manage Roles</h4>
                            <p class="text-sm text-gray-700">Create, edit, and assign roles to users.</p>
                            <a href="{{ route('admin.roles.index') }}" class="inline-block mt-2 px-4 py-2 bg-purple-600 rounded">
                                View Roles
                            </a>
                        </div>

                        {{-- Manage Users --}}
                        <div class="p-4 bg-indigo-100 rounded-lg shadow">
                            <h4 class="font-semibold text-lg mb-2">👥 Manage Users</h4>
                            <p class="text-sm text-gray-700">View and manage registered users.</p>
                            <a href="{{ route('admin.users.index') }}" class="inline-block mt-2 px-4 py-2 bg-indigo-600 rounded">
                                View Users
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
