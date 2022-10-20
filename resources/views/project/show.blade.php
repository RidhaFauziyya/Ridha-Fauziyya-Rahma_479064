@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-6">
                <img class="px-5" src="{{ asset('storage/project/'.$project->imagePath) }}" class="rounded" widht= "500px" height="250px">
            </div>
            <div class="col-md-6">
                <h1 class="display-4"><b>{{$project->namaProject}}</b></h1>
                <small>Tanggal Upload: {{$project->created_at}}</small>
                <br></br>
                <p>{{$project->description}}</p>
                <a href="/project" class="btn button bg-lightblue">Back</a> 
                <a href="/project/{{$project->id}}/edit" class="btn button bg-lightblue">Edit</a>

                <!-- <form action= "{{ route('project.destroy', $project->id)}}" method="POST">@method('DELETE')
                {{ csrf_field() }} -->
                    <input type="hidden" name="id" value="{{$project->id }}"> <br></br>
                    <a href="/project/hapus/{{$project->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Project Ini?');" class="btn btn-danger btn-sm">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


