@extends('layout')

@section('content')
<div class="card">
    <h2>Edit Employee</h2>

    @if($errors->any())
        <div class="msg err">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach 
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input name="name" value="{{ old('name', $employee->name) }}">

        <label>Email</label>
        <input name="email" value="{{ old('email', $employee->email) }}">

        <label>Job Title</label>
        <input name="job_title" value="{{ old('job_title', $employee->job_title) }}">

        <label>Salary</label>
        <input name="salary" value="{{ old('salary', $employee->salary) }}">

        <button class="btn dark" type="submit">Update</button>
        <a class="btn light" href="{{ route('employees.index') }}">Cancel</a>
    </form>
</div>
@endsection