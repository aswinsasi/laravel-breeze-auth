@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Student Dashboard') }}
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
                        {{ __("You're logged in as a student. Explore your dashboard and access learning resources.") }}
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="p-4 bg-blue-100 rounded-lg shadow">
                            <h4 class="font-semibold text-lg mb-2">📚 My Courses</h4>
                            <p class="text-sm text-gray-700">View and manage your enrolled courses.</p>
                        </div>
                        <div class="p-4 bg-green-100 rounded-lg shadow">
                            <h4 class="font-semibold text-lg mb-2">📝 Assignments</h4>
                            <p class="text-sm text-gray-700">Submit and track your assignments.</p>
                        </div>
                        <div class="p-4 bg-yellow-100 rounded-lg shadow">
                            <h4 class="font-semibold text-lg mb-2">📅 Schedule</h4>
                            <p class="text-sm text-gray-700">Check your upcoming classes and deadlines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
