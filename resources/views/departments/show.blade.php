@extends('layouts.app')

@section('title', 'View Department')

@section('content')

    <h2>{{ $department->title }}</h2>

    <p>{{ $department->code }}</p>
    <p>{{ $department->description ?? 'No description.' }}</p>

    <a href="{{ route('departments.edit', $department) }}">Edit</a>
    <a href="{{ route('departments.index') }}">Back</a>

@endsection