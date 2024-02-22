@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>Add new project</h2>
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="form-group my-2">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" required>
                </div>
                <div class="form-group my-2">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>
                <div class="form-group my-2">
                    <label for="preview_image">Preview image</label>
                    <input class="form-control" type="text" name="preview_image" id="preview_image" value="{{ old('preview_image') }}" required>
                </div>
                <div class="form-group my-2">
                    <label for="authors">Authors</label>
                    <input class="form-control" type="text" name="authors" id="authors" value="{{ old('authors') }}"required>
                </div>
                <div class="form-group my-2">
                    <label for="completed">Completed</label>
                    <select class="form-control @error('completed') is-invalid @enderror" name="completed" id="completed">
                        <option value="">Select an option</option>
                        <option value="1" @selected(old('completed') == 1)>Yes</option>
                        <option value="0" @selected(old('completed') == 0)>No</option>
                    </select>
                </div>
                <div class="form-group my-2">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection