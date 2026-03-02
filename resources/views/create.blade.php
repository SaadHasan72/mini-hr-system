@extends('layout')

@section('content')
<div class="card">
    <h2>Add Employee</h2>

    @if($errors->any())
        <div class="msg err">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input name="name" value="{{ old('name') }}">

        <label>Email</label>
        <input name="email" value="{{ old('email') }}">

        <label>Job Title</label>
        <input name="job_title" value="{{ old('job_title') }}">

        <label>Salary</label>
        <input name="salary" value="{{ old('salary') }}">

        <button class="btn dark" type="submit">Save</button>
        <a class="btn light" href="{{ route('employees.index') }}">Cancel</a>
    </form>
</div>
@endsection