@extends('layouts.app')
@section('content')
    <div class="container-fluid show-bg mt-4">
        <div class="row">
            <div class="col-12 text-center text-dark fw-bold mt-3 mb-2">
                <h2> Project List:</h2>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-dark" href="{{ route('admin.projects.create') }}">
                            Create New Project
                        </a>
                    </button>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->author }}</td>
                                <td>{{ $project->description }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $album->id) }}" class="btn btn-sm btn-primary me-2">Show</a>
                                    {{-- <a href="{{ route('album.edit', $album->id) }}" class="btn btn-sm bedit me-2">Edit</a> --}}
                                    {{-- <form action="{{ route('album.delete', $album->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm bdelete text-white">
                                            Delete
                                        </button>
                                    </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <h3 class="text-center">No Projects available</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

