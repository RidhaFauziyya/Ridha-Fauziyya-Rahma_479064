@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><b>Edit Activity</b></h1>
            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype ="multipart/form-data"> @method('PUT')
            {{ csrf_field() }}
            <div class="form-group">
                <label for="namaAktifitas">Nama Aktifitas</label>
                <input type="text" class="form-control @error('namaAktifitas') is-invalid @enderror" id="namaAktifitas" aria-describedby="emailHelp" name="namaAktifitas" value="{{$about->namaAktifitas}}" >
                @error('namaAktifitas')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="imagePath" class="@error('image') is-invalid @enderror">
                <img src="{{ asset('storage/about/'.$about->imagePath) }}" width="300px" alt="Image">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5" name="description">{{$about->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="id" value="{{ $about->id }}">
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection


