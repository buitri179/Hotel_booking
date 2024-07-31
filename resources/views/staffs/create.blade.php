@extends('layouts.admintemplate')

@section('content')
    <div class="container">
        <h1>Create New Staff</h1>
        <form action="{{ route('staffs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>
            <div class="form-group">
                <label for="department_id">Department</label>
                <select class="form-control" id="department_id" name="department_id" required>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" name="bio"></textarea>
            </div>
            <div class="form-group">
                <label for="salary_type">Salary Type</label>
                <input type="text" class="form-control" id="salary_type" name="salary_type" required>
            </div>
            <div class="form-group">
                <label for="salary_amount">Salary Amount</label>
                <input type="number" class="form-control" id="salary_amount" name="salary_amount" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection