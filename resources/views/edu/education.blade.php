@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid bg-white">
        <h1 class="display-4 text-center font-weight-bolder text-dark"><b>Education</b></h1>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="col-md-6">
                <img class="px-5 rounded mx-auto d-block" src="https://img2.storyblok.com//f/90801/2000x1106/41bc9bbb40/blog-technology-background.jpg" class="rounded" widht= "400px" height="250px">
            </div>
            <div class="col-md-5">
                <p class="lead">Here is my education history:</p>
                @if(count($education)>0)
                    @foreach($education as $education)
                    <ul class="ml-auto">
                        <li class="nav-item">
                            <h3 class="card-title">{{$education->jenjangpendidikan}}</h3>
                            <p class="card-text">{{$education->namaInstansi}}</p>
                            <p class="card-text">{{$education->waktu}}</p>
                        </li>  
                    </ul>
                    @endforeach
                @else
                    <h5>Data Education Tidak Tersedia</h5>
                @endif
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
@endsection


