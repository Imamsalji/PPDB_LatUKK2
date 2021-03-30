@extends('template.app')
@section('title', 'Dashboard')
@section('dashboard', 'Peserta')
@section('namedashboard', 'Peserta ')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align: center">
                <div class="card-header">Anda Sudah Daftar Silahkan Lihat data Anda</div>

                <div class="card-body">
                    <a href="{{route('show', Auth::user()->nisn)}}" class="btn btn-outline-success">Lihat Data</a>
                    <a href="{{route('edit', Auth::user()->nisn)}}" class="btn btn-outline-danger">Edit </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
