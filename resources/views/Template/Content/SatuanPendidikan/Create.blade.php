@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Create Satuan Pendidikan')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Satuan Pendidikan</h6>
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
        <form action="{{route('satuan_pendidikan.store')}}" method="post">
            @csrf

            Satuan Pendidikan : <input type="text" name="satuan_pendidikan"><br>
            Kepala Sekolah : <input type="text" name="kepsek"><br>
            Alamat : <input type="text" name="alamat"><br>
            Level : 
            <select name="kabkot_id">
                @foreach ($data_kabkots as $data)
                <option value="{{$data->id}}">{{$data->kabkot}}</option>
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