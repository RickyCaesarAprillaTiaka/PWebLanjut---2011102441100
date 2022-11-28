@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Edit Peserta Didik')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Peserta Didik</h6>
    </div>
    <div class="card-body">
        <form action="{{route('peserta_didik.update', ['peserta_didik' => $peserta_didik->id])}}" method="post">
            @csrf
            @method("PUT")

            Nama Peserta Didik : <input type="text" name="nama_pd" value="{{$peserta_didik->nama_pd}}"><br>
            Kelas : <input type="text" name="kelas" value="{{$peserta_didik->kelas}}"><br>
            Rombel : 
            <select name="rombel_id">
                @foreach ($data_rombels as $data)
                <option value="{{$data->id}}">{{$data->nama_rombel}}</option>
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