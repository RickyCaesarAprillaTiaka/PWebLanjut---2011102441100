@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Show Satuan Pendidikan')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Show Satuan Pendidikan</h6>
    </div>
    <div class="card-body">
            Satuan Pendidikan : {{$satuan_pendidikan->satuan_pendidikan}}<br>
            Kepala Sekolah : {{$satuan_pendidikan->kepsek}}<br>
            Alamat : {{$satuan_pendidikan->alamat}}<br>
            Kabupaten/Kota : {{$satuan_pendidikan->kabupatenKotaSatuanPendidikan->kabkot}}<br>
            Admin : {{$satuan_pendidikan->adminSatuanPendidikan->nama_lengkap}}<br>
            Jumlah Guru : {{$data_gurus->count()}}<br>
            Jumlah Peserta Didik : {{$data_peserta_didiks->count()}}<br>
            Jumlah Rombel : {{$data_rombels->count()}}
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Guru</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap Guru</th>
                                <th>Jenjang Pendidikan</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap Guru</th>
                                <th>Jenjang Pendidikan</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach ($data_gurus as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$data->satuanPendidikanGuru->nama_lengkap_gr}}</td>
                                    <td>{{$data->satuanPendidikanGuru->jenjang_pendidikan}}</td>
                                    <td>{{$data->satuanPendidikanGuru->jenis_kelamin = "l" ? "Laki-laki":"Perempuan"}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Peserta Didik</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta Didik</th>
                                <th>Kelas</th>
                                <th>Rombel</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta Didik</th>
                                <th>Kelas</th>
                                <th>Rombel</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach ($data_peserta_didiks as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$data->nama_pd}}</td>
                                    <td>{{$data->kelas}}</td>
                                    <td>{{$data->rombelPesertaDidik->nama_rombel}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rombel</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Rombel</th>
                                <th>Wali Kelas</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Rombel</th>
                                <th>Wali Kelas</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1
                            @endphp
                            @foreach ($data_rombels as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$data->nama_rombel}}</td>
                                    <td>{{$data->waliKelas->nama_lengkap_gr}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@push('Javascript')
<!-- Page level plugins -->
<script src="{{asset('SBAdmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('SBAdmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Page level custom scripts -->
<script src="{{asset('SBAdmin2/js/demo/datatables-demo.js')}}"></script>
<script>
$(document).ready(function() {
  $('#dataTable2').DataTable();
  $('#dataTable3').DataTable();
});
</script>
@endpush