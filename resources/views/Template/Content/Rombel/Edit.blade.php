@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Edit Rombel')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Rombel</h6>
    </div>
    <div class="card-body">
        <form action="{{route('rombel.update', ['rombel' => $rombel->id])}}" method="post">
            @csrf
            @method("PUT")

            Nama Rombel : <input type="text" name="nama_rombel" value="{{$rombel->nama_rombel}}"><br>
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