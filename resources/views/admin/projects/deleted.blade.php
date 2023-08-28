@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $projects as $project )
                        <tr>
                            <th>
                                {{ $project->id }}
                            </th>
                            <td>
                                <strong>
                                    {{ $project->title }}
                                </strong>
                            </td>
                            <td>
                                {{ $project->slug }}
                            </td>
                            <td>
                                <form class="d-inline-block me-2" action="{{ route('admin.projects.restore', $project) }}" method="POST">
                                    @csrf
                                    @method('POST')

                                    <button type="submit" class="btn btn-sm btn-warning">
                                        Restore
                                    </button>
                                </form>
                                <form class="d-inline-block" action="{{ route('admin.projects.obliterate', $project) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Delete permanently
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

            {{ $projects->links() }}

        </div>
    </div>
</div>
@endsection