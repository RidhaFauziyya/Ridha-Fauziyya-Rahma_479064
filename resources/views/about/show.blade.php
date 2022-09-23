@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-6">
                <img class="px-5" src="{{ asset('storage/about/'.$about->imagePath) }}" class="rounded" widht= "500px" height="250px">
            </div>
            <div class="col-md-6">
                <h1 class="display-4"><b>{{$about->namaAktifitas}}</b></h1>
                <small>Tanggal Upload: {{$about->created_at}}</small>
                <br></br>
                <p>{{$about->description}}</p>
                <a href="/about" class="btn btn-dark">Back</a>
                <a href="/about/{{$about->id}}/edit" class="btn btn-light">Edit</a>

                <!-- <form action= "{{ route('about.destroy', $about->id)}}" method="POST">@method('DELETE')
                {{ csrf_field() }} -->
                    <input type="hidden" name="id" value="{{$about->id }}"> <br></br>
                    <a href="/about/hapus/{{$about->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Aktifitas Ini?');" class="btn btn-danger btn-sm">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


