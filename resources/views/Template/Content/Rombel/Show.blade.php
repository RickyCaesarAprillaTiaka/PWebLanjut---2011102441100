@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Show Rombel')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Show Rombel</h6>
    </div>
    <div class="card-body">
            Nama Rombel : {{$rombel->nama_rombel}}<br>
            Wali Kelas : {{$rombel->wali_kelas}}<br>
            Admin : {{$rombel->adminSatuanPendidikan->nama_lengkap}}
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