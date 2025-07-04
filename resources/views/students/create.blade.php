@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Create Student</h1>

        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="course">Course</label>
                <input type="text" name="course" id="course" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-control" required min="1" max="100">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
