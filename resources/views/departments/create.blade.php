@extends('layouts.app')

@section('title', 'Create Department')

@section('content')

    <h2>Create Department</h2>

    <form action="{{ route('departments.store') }}" method="POST">
        @csrf

        @include('departments._form')
    </form>

    <a href="{{ route('departments.index') }}">Cancel</a>

@endsection