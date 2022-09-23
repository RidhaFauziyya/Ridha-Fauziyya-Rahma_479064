@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid ">
            <h1 class="display-4 text-center"><b>Education</b></h1>
    </div>
    <br>
    <div class="container">
    <img src="https://img2.storyblok.com//f/90801/2000x1106/41bc9bbb40/blog-technology-background.jpg" class="img-fluid">
    </div>
    <div class="row">
        @if(count($education)>0)
            @foreach($education as $education)
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body text-white bg-dark">
                            <h3 class="card-title">{{$education->jenjangpendidikan}}</h3>
                            <p class="card-text">{{$education->namaInstansi}}</p>
                            <p class="card-text">{{$education->waktu}}</p>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        @else
            <h5>Data Education Tidak Tersedia</h5>
        @endif
    </div>
</div>
@endsection


