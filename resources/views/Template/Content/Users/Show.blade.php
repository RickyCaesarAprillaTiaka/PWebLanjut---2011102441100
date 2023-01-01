@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Show Users')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Show User</h6>
    </div>
    <div class="card-body">
            Email : {{$user->email}}<br>
            Nama Lengkap : {{$user->nama_lengkap}}<br>
            No Hp : {{$user->no_hp}}<br>
            Level : {{$user->level_user}}
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