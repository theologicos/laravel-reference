@extends('layouts.app')

@section('title', 'All Departments')

@section('content')

    <h2>All Departments</h2>

    <a href="{{ route('departments.create') }}">Create Departments</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Code</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($departments as $department)
                <tr>
                    <td>{{ $department->name ?? 'No name' }}</td>
                    <td>{{ $department->code ?? 'No code assigned' }}</td>
                    <td>{{ $department->description ?? 'No description' }}</td>

                    <td>
                        <a href="{{ route('departments.show', $department) }}">
                            View
                        </a>

                        <a href="{{ route('departments.edit', $department) }}">
                            Edit
                        </a>

                        <form
                            action="{{ route('departments.destroy', $department) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No departments found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $departments->links() }}

@endsection
