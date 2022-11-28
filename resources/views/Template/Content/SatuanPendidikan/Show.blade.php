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
            Admin : {{$satuan_pendidikan->adminSatuanPendidikan->nama_lengkap}}
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