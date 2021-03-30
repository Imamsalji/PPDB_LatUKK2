@extends('template.app')
@section('title', 'Dashboard')
@section('dashboard', ' Peserta')
@section('namedashboard', 'Detail Peserta ')
@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
            <h2 style="text-align: center">Detail Peserta</h2>

                <div class="table-responsive">
                    <table class="table user-table" style="text-align: center">
                        <tbody>
                            <tr>
                                <th>NIS</th>
                                <td>:</td>
                                <td>{{$student->nis}}</td>
                            </tr>
                            <tr>
                                <th>NISN</th>
                                <td>:</td>
                                <td>{{$student->nisn}}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>:</td>
                                <td>{{$student->nama}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>{{$student->jk}}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>:</td>
                                <td>{{$student->temp_lahir}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{$student->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>:</td>
                                <td>{{$student->agama}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('page-scripts')
  
@endpush
@push('after-script')
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
@endpush
