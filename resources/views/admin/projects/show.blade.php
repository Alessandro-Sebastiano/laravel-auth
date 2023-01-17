@extends('layouts.app')

@section('content')
    <div class="container-sm w-50">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure to delete {{ $project->title }}?
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" id="my-delete-button">Yes, delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative pb-4 mb-5 border-bottom border-2">
            <a href="{{ route('projects.index') }}"><button class="btn btn-primary position-absolute">All
                    projects</button></a>
            <h4 class="text-center">{{ $project->title }}</h4>
        </div>
        <div class="list-group container-sm mb-4 p-0">
            <a class="list-group-item list-group-item-action active py-3 d-flex justify-content-between"
                aria-current="true">
                <div class="d-flex">
                    <h5 class="mb-1 me-5">{{ $project->title }}</h5>
                    <p class="mb-1">Project Type: {{ $project->type }}</p>
                </div>
                <small>{{ $project->slug }}</small>
            </a>
        </div>
        <div class="text-end">
            <a href="{{ route('projects.edit', $project->slug) }}"><button class="btn btn-info me-2">Edit</button></a>
            <form id="delete-form" action="{{ route('projects.destroy', $project->slug) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
