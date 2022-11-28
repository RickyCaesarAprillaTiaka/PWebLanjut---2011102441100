@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Create Guru')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Guru</h6>
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
        <form action="{{route('guru.store')}}" method="post">
            @csrf

            Nama Lengkap Guru : <input type="text" name="nama_lengkap_gr"><br>
            Jenjang Pendidikan : <input type="text" name="jenjang_pendidikan"><br>
            Jenis Kelamin : 
            <select name="jenis_kelamin">
                <option value="l">Laki-laki</option>
                <option value="p">Perempuan</option>
            </select> <br>
            Satuan Pendidikan : 
            <select name="sp_id">
                @foreach ($data_satuan_pendidikans as $data)
                    <option value="{{$data->id}}">{{$data->satuan_pendidikan}}</option>
                @endforeach
            </select><br>
            Status Tugas :
            <select name="status_tugas">
                <option value="induk">Induk</option>
                <option value="non induk">Non Induk</option>
            </select><br>
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