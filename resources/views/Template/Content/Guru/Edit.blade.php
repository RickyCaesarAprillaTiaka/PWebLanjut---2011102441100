@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Edit Guru')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Guru</h6>
    </div>
    <div class="card-body">
        <form action="{{route('guru.update', ['guru' => $guru->id])}}" method="post">
            @csrf
            @method("PUT")

            Nama Lengkap Guru : <input type="text" name="nama_lengkap_gr" value="{{$guru->nama_lengkap_gr}}"><br>
            Jenjang Pendidikan : <input type="text" name="jenjang_pendidikan" value="{{$guru->jenjang_pendidikan}}"><br>
            Jenis Kelamin : 
            <select name="jenis_kelamin">
                <option value="l">Laki-laki</option>
                <option value="p">Perempuan</option>
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