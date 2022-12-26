@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Create Rombel')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Rombel</h6>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('rombel.store')}}" method="post">
            @csrf

            Nama Rombel : <input type="text" name="nama_rombel"><br>
            Satuan Pendidikan : 
            <select name="sp_id">
                @foreach ($data_satuan_pendidikans as $data)
                <option value="{{$data->id}}">{{$data->satuan_pendidikan}}</option>
                @endforeach
            </select> <br>
            Wali Kelas : 
            <select name="wali_kelas">
                @foreach ($data_gurus as $data)
                <option value="{{$data->id}}">{{$data->nama_lengkap_gr}}</option>
                @endforeach
            </select> <br>
            <button type="submit">Submit</button>
        </form>
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