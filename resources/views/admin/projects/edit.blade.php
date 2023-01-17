@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <div class="position-relative mb-5 border-bottom border-2">
            <a href="{{ route('projects.index') }}"><button class="btn btn-primary position-absolute">All
                    projects</button></a>
            <h3 class="text-center mb-4">Edit Project</h3>
        </div>
        <form action="{{ route('projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $project->type }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
