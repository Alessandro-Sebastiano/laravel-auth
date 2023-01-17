@extends('layouts.app')
@section('content')
    <div class="container-lg">
        <h4 class="mb-3 pb-3 border-bottom border-2">Home</h4>
        <ul>
            <div class="container-sm w-50">
                <div class="">
                    <h3 class="text-center mb-4">Projects</h3>
                </div>
                <div class="list-group container-sm my-3 mb-4">
                    @foreach ($home_projects as $project)
                        <a href="#" class="list-group-item list-group-item-action py-3 d-flex justify-content-between"
                            aria-current="true">
                            <div class="d-flex">
                                <h5 class="mb-1 me-5">{{ $project->title }}</h5>
                                <p class="mb-1">Project Type: {{ $project->type }}</p>
                            </div>
                            <small>{{ $project->slug }}</small>
                        </a>
                    @endforeach
                </div>
            </div>
        </ul>
    </div>
@endsection
