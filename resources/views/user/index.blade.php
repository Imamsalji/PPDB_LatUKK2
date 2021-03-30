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
                        class="form-control  form-control-line">
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
                        id="example-email">
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
                        class="form-control  form-control-line">
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
                    <input type="text" name="temp_lahir1" placeholder="tempat Lahir"
                        class="form-control  form-control-line">
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
                    <textarea type="text" name="alamat" placeholder="masukan alamat"
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
                    <input type="text" name="agama" placeholder="Pilih Kepercayaan"
                        class="form-control form-control-line">
                </div>
                @error('agama')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <hr>
            <h4>Keterangan Pendidikan</h4>
            <hr>
            <div class="form-group">
                <label class="col-md-12 mb-0">Asal Sekolah</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Asal Sekolah" name="asal_sekolah"
                        class="form-control  form-control-line">
                </div>
                @error('asal_sekolah')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Alamat Sekolah</label>
                <div class="col-md-12">
                    <textarea type="text" placeholder="Masukan Asal Sekolah" name="Alamat_Sekolah"
                        class="form-control  form-control-line"></textarea>
                </div>
                @error('Alamat_Sekolah')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Nomor SKHUN</label>
                <div class="col-md-12">
                    <input type="number" placeholder="Masukan Nomor SKHUN" name="no_skhun"
                        class="form-control  form-control-line">
                </div>
                @error('no_skhun')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Nomor Peserta</label>
                <div class="col-md-12">
                    <input type="number" placeholder="Masukan Nomor SKHUN" name="no_peserta"
                        class="form-control  form-control-line">
                </div>
                @error('no_peserta')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <hr>
            <h4>Data Ibu</h4>
            <hr>
            <div class="form-group">
                <label class="col-md-12 mb-0">Nama Ibu</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Nama Ibu" name="nm_ibu"
                        class="form-control  form-control-line">
                </div>
                @error('nm_ibu')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Tempat Lahir</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Tempat Lahir" name="tmpt_lahir2"
                        class="form-control  form-control-line">
                </div>
                @error('tmpt_lahir2')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Tanggal Lahir</label>
                <div class="col-md-12">
                    <input type="date" placeholder="Masukan Tanggal Lahir" name="tgl_lahir2"
                        class="form-control  form-control-line">
                </div>
                @error('tgl_lahir2')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Pendidikan Terakhir</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Pendidikan Terakhir Ibu" name="terakhir1"
                        class="form-control  form-control-line">
                </div>
                @error('terakhir1')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Pekerjaan</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Pekerjaan Ibu" name="pekerjaan1"
                        class="form-control  form-control-line">
                </div>
                @error('pekerjaan1')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <hr>
            <h4>Data Ayah</h4>
            <hr>
            <div class="form-group">
                <label class="col-md-12 mb-0">Nama Ayah</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Nama Ibu" name="nm_ayah"
                        class="form-control  form-control-line">
                </div>
                @error('nm_ayah')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Tempat Lahir</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Tempat Lahir" name="tmpt_lahir3"
                        class="form-control  form-control-line">
                </div>
                @error('tmpt_lahir3')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Tanggal Lahir</label>
                <div class="col-md-12">
                    <input type="date" placeholder="Masukan Tanggal Lahir" name="tgl_lahir3"
                        class="form-control  form-control-line">
                </div>
                @error('tgl_lahir3')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Pendidikan Terakhir</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Pendidikan Terakhir Ayah" name="terakhir2"
                        class="form-control  form-control-line">
                </div>
                @error('terakhir2')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label class="col-md-12 mb-0">Pekerjaan</label>
                <div class="col-md-12">
                    <input type="text" placeholder="Masukan Pekerjaan Ayah" name="pekerjaan2"
                        class="form-control  form-control-line">
                </div>
                @error('pekerjaan2')
                    <span class="text-danger ml-3">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <hr>
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
