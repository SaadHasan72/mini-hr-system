@extends('layout')

@section('content')
<div class="card">
    <a class="btn dark" href="{{ route('employees.create') }}">+ Add Employee</a>

    <table>
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Job Title</th><th>Salary</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $e)
            <tr>
                <td>{{ $e->name }}</td>
                <td>{{ $e->email }}</td>
                <td>{{ $e->job_title }}</td>
                <td>{{ number_format($e->salary, 2) }}</td>
                <td>
                    <a class="btn light" href="{{ route('employees.edit', $e) }}">Edit</a>

                    <form action="{{ route('employees.destroy', $e) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn danger" onclick="return confirm('Delete this employee?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5">No employees yet.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection