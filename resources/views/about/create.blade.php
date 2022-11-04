@extends('layouts.app')

@section('content')
<div class="container">
<br>
    <div class="jumbotron jumbotron-fluid p-5">
        <div class="container">
            <h1><b>Add Activity</b></h1>
            <form action="{{ route('about.store') }}" method="POST" enctype ="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="namaAktifitas">Nama Aktifitas</label>
                <input type="text" class="form-control @error('namaAktifitas') is-invalid @enderror" id="namaAktifitas" aria-describedby="emailHelp" name="namaAktifitas" >
                @error('namaAktifitas')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="file" name="imagePath" class="@error('imagePath') is-invalid @enderror">
                @error('imagePath')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="5" name="description"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection


