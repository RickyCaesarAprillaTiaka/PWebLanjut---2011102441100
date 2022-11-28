@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Show Guru')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Show Guru</h6>
    </div>
    <div class="card-body">
            Nama Lengkap Guru : {{$guru->nama_lengkap_gr}}<br>
            Jenjang Pendidikan : {{$guru->jenjang_pendidikan}}<br>
            Jenis Kelamin : {{$guru->jenis_kelamin == "l"?"Laki-laki":"Perempuan"}}<br>
            Admin : {{$guru->adminSatuanPendidikan->nama_lengkap}}
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

</script>
@endpush