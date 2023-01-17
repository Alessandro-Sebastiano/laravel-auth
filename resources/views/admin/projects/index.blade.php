@extends('layouts.app')

@section('content')
    <div class="container-sm w-50">
        <div class="mb-5 border-bottom border-2">
            <h3 class="text-center mb-4">Projects</h3>
        </div>
        <div class="list-group container-sm my-3 mb-4">
            @foreach ($projects as $project)
                <a href="{{ route('projects.show', $project->slug) }}"
                    class="list-group-item list-group-item-action py-3 d-flex justify-content-between" aria-current="true">
                    <div class="d-flex">
                        <h5 class="mb-1 me-5">{{ $project->title }}</h5>
                        <p class="mb-1">Project Type: {{ $project->type }}</p>
                    </div>
                    <small>{{ $project->slug }}</small>
                </a>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('projects.create') }}"><button class="btn btn-success text-center">Add New
                    Project</button></a>
        </div>
    </div>
@endsection
