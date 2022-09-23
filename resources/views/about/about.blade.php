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
    <div class="jumbotron jumbotron-fluid bg-dark">
            <h1 class="display-4 text-center text-white"><b>About</b></h1>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-6">
                <img class="px-5" src="https://static.vecteezy.com/system/resources/previews/006/648/546/original/muslim-woman-do-business-video-call-conference-telecommuting-webinar-using-laptop-talk-to-colleagues-online-learning-and-remote-working-concept-illustration-free-vector.jpg" class="rounded" widht= "400px" height="300px">
            </div>
            <div class="col-md-6">
                <p class="lead">Hi! My name is Rida Fauziyah Rahma. I am currently studying for a D4 program in the field of software engineering technology at Gadjah Mada University Vocational School and am in 3rd semester.
                    During my school and college years, I participated in many activities ranging from organizations, committees, volunteering and many more. I got many benefits from this activity.</p>
                <p>Add new activity here:</p>
                <a href="/about/create" class="btn btn-dark">Add Activity</a>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h3>Activity:</h3>
    <br>
    <div class="row">
        @if(count($about)>0)
            @foreach($about as $about)
                <div class="col-sm-4">
                    <div class="card">
                        <img src="{{ asset('storage/about/'.$about->imagePath) }}" class="w-100 p-2 border-bottom" alt="Rounded Image">
                        <div class="card-body text-white bg-dark">
                            <h3 class="card-title">{{$about->namaAktifitas}}</h3>
                            <p class="card-text">Upload: {{$about->created_at}}</p>
                            <p class="card-text">Update: {{$about->updated_at}}</p>
                            <a href="/about/{{$about->id}}" class="btn btn-light">Read More</a>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        @else
            <br>
            <h5>Data Aktifitas Tidak Tersedia</h5>
            <br>
        @endif
    </div>
</div>

@endsection
