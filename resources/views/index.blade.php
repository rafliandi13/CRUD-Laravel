@extends('layout/main')
@section('title','Home')

@section('navbar-link')
        <a class="nav-item nav-link active" href="{{url('/')}}">Home</a>
        <a class="nav-item nav-link" href="{{url('/about')}}">About</a>
        <a class="nav-item nav-link" href="{{url('/mahasiswa')}}">Mahasiswa</a>
        <a class="nav-item nav-link" href="{{url('/students')}}">Students</a>
@endsection

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>Hello, world!</h1>
            </div>
        </div>
    </div>
@endsection
