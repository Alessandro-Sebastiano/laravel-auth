@extends('layouts.app')
@section('content')
    <div class="container-sm">
        <div class="position-relative mb-5 border-bottom border-2">
            <a href="{{ route('projects.index') }}"><button class="btn btn-primary position-absolute">All
                    projects</button></a>
            <h3 class="text-center mb-4">Create New Project</h3>
        </div>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
