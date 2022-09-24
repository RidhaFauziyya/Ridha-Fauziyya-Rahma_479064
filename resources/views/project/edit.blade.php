@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><b>Edit Project</b></h1>
            <form action="{{ route('project.update', $project->id) }}" method="POST" > @method('PUT')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="namaProject">Nama Project</label>
                <input type="text" class="form-control @error('namaProject') is-invalid @enderror" id="namaProject" aria-describedby="emailHelp" name="namaProject" value="{{$project->namaProject}}">
                @error('namaProject')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="imagePath" class="@error('imagePath') is-invalid @enderror">
                <img src="{{ asset('storage/project/'.$project->imagePath) }}" width="300px" alt="Image">
                @error('imagePath')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5" name="description">{{$project->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="id" value="{{ $project->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection


