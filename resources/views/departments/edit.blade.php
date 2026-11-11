@extends('layouts.app')

@section('title', 'Edit Department')

@section('content')

    <h2>Edit Department</h2>

    <form action="{{ route('departments.update', $department) }}" method="POST">
        @csrf
        @method('PUT')

        @include('departments._form')
    </form>

    <a href="{{ route('departments.index') }}">Cancel</a>

@endsection