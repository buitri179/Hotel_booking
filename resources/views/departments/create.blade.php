@extends('layouts.admintemplate')

@section('content')
    <div class="container">
        <h1>Create New Department</h1>
        <form action="{{ route('departments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea class="form-control" id="detail" name="detail"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
