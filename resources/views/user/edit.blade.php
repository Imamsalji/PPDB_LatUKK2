@extends('template.app')
@section('title', 'Daftar')
@section('dashboard', 'daftar')
@section('namedashboard', ' Pendaftaran ')
@section('content')
<div class="container">
    <div class="card ml-5 mr-5 mt-3">
    <div class="card-header">
        <h2 style="text-align: center">pendaftaran</h2>
    </div>
    <div class="card-body">
        <h4>Data Diri</h4>
        <hr>
        <form action="{{ route('pendaftaran') }}" method="POST" class="form-horizontal form-material">
            @csrf
            <div class="form-group">
                <label class="col-md-12 mb-0">NIS</label>
                <div class="col-md-12">
                    <input type="number" placeholder="nis" name="nis"
                        class="form-control  form-control-line"  value="{{$student->nis}}">
                </div>
                @error('nis')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="example-email" class="col-md-12">nisn</label>
                <div class="col-md-12">
                    <input type="number" placeholder="nisn"
                        class="form-control  form-control-line" name="nisn"
                        id="example-email" value="{{$student->nis}}">
                </div>
                @error('nisn')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Nama Lengkap</label>
                <div class="col-md-12">
                    <input type="text"  name="nama"
                        class="form-control  form-control-line" value="{{$student->nis}}">
                </div>
                @error('nis')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Jenis Kelamin</label>
                <div class="col-md-12">
                    <select name="jk" class="form-control">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                @error('nis')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Tempat Lahir</label>
                <div class="col-md-12">
                    <input type="text" name="temp_lahir1" 
                        class="form-control  form-control-line" value="{{$student->nis}}">
                </div>
                @error('nis')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-sm-12">Tanggal Lahir</label>
                <div class="col-sm-12">
                    <input type="date" name="tgl_lahir1"
                        class="form-control  form-control-line">
                </div>
                @error('nis')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Alamat</label>
                <div class="col-md-12">
                    <textarea type="text" name="alamat" 
                        class="form-control  form-control-line"></textarea>
                </div>
                @error('nis')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">agama</label>
                <div class="col-md-12">
                    <input type="text" name="agama" 
                        class="form-control form-control-line">
                </div>
                @error('agama')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <div class="col-sm-12 d-flex">
                    <button class="btn btn-secondary ml-3 " type="reset">Reset</button>
                    <button class="btn btn-success mx-auto text-white">Simpan Data
                        </button>
                        
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
