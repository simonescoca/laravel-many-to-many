@extends('layouts.app')

@section('content')
<div class="container" id="projects-container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header"> ID: {{ $project->id }} ---- {{ $project->slug }}</h5>
                <a src="{{ $project->url }}" alt="{{ $project->title }}">
                   Project url: {{$project->url}}
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $project->title }}
                    </h5>
                    <p class="card-text">
                        {{ $project->content }}
                    </p>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-success">
                        Edit
                    </a>
                    @if (str_starts_with($project->image, 'http' ))
                        <img src="{{ $project->image }}" alt="{{ $project->title }}">
                    @else
                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    @endif
                    <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project ) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-warning">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection