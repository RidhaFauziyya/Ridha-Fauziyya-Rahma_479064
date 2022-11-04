@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-7">
                <img class="px-5" src="{{ asset('storage/about/'.$about->imagePath) }}"  style="height: 280px;">
            </div>
            <div class="col-md-5">
                <h1><b>{{$about->namaAktifitas}}</b></h1>
                <small>Tanggal Upload: {{$about->created_at}}</small>
                <br></br>
                <p>{{$about->description}}</p>
                <a href="/about" class="btn button bg-lightblue">Back</a>
                @auth 
                <a href="/about/{{$about->id}}/edit" class="btn button bg-lightblue">Edit</a>

                <!-- <form action= "{{ route('about.destroy', $about->id)}}" method="POST">@method('DELETE')
                {{ csrf_field() }} -->
                <input type="hidden" name="id" value="{{$about->id }}"> <br></br>
                <a href="/about/hapus/{{$about->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Aktifitas Ini?');" class="btn btn-danger btn-sm">Delete</a>
                @endauth
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


