@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row my-4">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Authors</th>
                        <th>Completed</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ Str::limit($project->description, 20, '...') }}</td>
                        <td>{{ $project->authors }}</td>
                        <td>{{ $project->completed ? 'Yes' : 'No' }}</td>
                        <td><a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-sm btn-primary btn-square">
                            <i class="bi bi-eye-fill"></i>
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection