@extends('layouts.app')
@section('content')
    <div class="container mt-4">
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
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->title }}</th>
                                <td>{{ $project->author }}</td>
                                <td>{{ $project->date }}</td>
                                <td>{{ $project->status }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-sm btn-primary me-2">Show</a>
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

