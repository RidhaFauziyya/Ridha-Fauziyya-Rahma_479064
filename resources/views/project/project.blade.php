@extends('layouts.app')

@section('content')
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('berhasil'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('update'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="jumbotron jumbotron-fluid bg-white">
        <h1 class="display-4 text-center font-weight-bolder text-dark"><b>Project</b></h1>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-5">
                <img class="px-5" src="https://www.publichealthnotes.com/wp-content/uploads/2020/03/project-planning-header@2x.png" class="rounded" widht= "400px" height="200px">
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-5">
                <p class="lead">This web page contains projects and works that I have or are currently working on.</p>
                @auth 
                    <p>Add new project here:</p>
                    <a href="/project/create" class="btn button bg-lightblue">Add Project</a>
                @endauth
                <br>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="font-weight-bolder">Project:</h3>
    <br>
    <div class="row">
        @if(count($project)>0)
            @foreach($project as $pro)
                <div class="col-sm-4">
                    <div class="card">
                        <img src="{{ asset ('storage/project/'.$pro->imagePath) }}" class="w-100 p-2 border-bottom" alt="Rounded Image">
                        <div class="card-body text-white bg-light">
                            <h3 class="card-title">{{$pro->namaProject}}</h3>
                            <p class="card-text">Upload: {{$pro->created_at}}</p>
                            <p class="card-text">Update: {{$pro->updated_at}}</p>
                            <a href="/project/{{$pro->id}}" class="btn button bg-lightblue">Read More</a>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        @else
            <h5>Data Project Tidak Tersedia</h5>
        @endif
    </div>
    <div class="container text-center">
        Halaman : {{ $project->currentPage() }} <br />
        Jumlah Data : {{ $project->total() }} <br />
        Data Per Halaman : {{ $project->perPage() }} <br></br>
        <div class="d-flex justify-content-center" >
            {{ $project->links() }}
        </div>
    </div>
</div>
@endsection


