@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-white">
    <h1 class="display-5 text-center font-weight-bolder text-dark"><b>Account Information</b></h1>
</div>
<div class="container">
  <div class="jumbotron jumbotron-fluid">
    <div class="container" style="margin-left:30px">
        <table cellpadding="10">
            <tr>
                <td><b>Nama </b></td>
                <td><b>: </b></td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td><b>Email </b></td>
                <td><b>: </b></td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <td><b>Tanggal Akun Dibuat </b></td>
                <td><b>: </b></td>
                <td>{{ Auth::user()->created_at }}</td>
            </tr>
            <tr>
                <td><b>Tanggal Akun Diupdate </b></td>
                <td><b>: </b></td>
                <td>{{ Auth::user()->updated_at }}</td>
            </tr>
        </table>
    </div>
  </div>
</div>
@endsection


