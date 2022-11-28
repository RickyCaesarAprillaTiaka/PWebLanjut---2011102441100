@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Satuan Pendidikan')
@push('ButtonAction')
<a href="{{route('satuan_pendidikan.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
    class="fas fa-plus fa-sm text-white-50"></i> Create Satuan Pendidikan</a>
@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table Satuan Pendidikan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Satuan Pendidikan</th>
                        <th>Kepala Sekolah</th>
                        <th>Alamat</th>
                        <th>Kabupaten/Kota</th>
                        <th>Admin</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Satuan Pendidikan</th>
                        <th>Kepala Sekolah</th>
                        <th>Alamat</th>
                        <th>Kabupaten/Kota</th>
                        <th>Admin</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>#</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i = 1
                    @endphp
                    @foreach ($data_satuan_pendidikans as $data)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$data->satuan_pendidikan}}</td>
                            <td>{{$data->kepsek}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->kabupatenKotaSatuanPendidikan->kabkot}}</td>
                            <td>{{$data->adminSatuanPendidikan->nama_lengkap}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->updated_at}}</td>
                            <td>
                                <div class="row p-1">
                                    <div class="col-4 pr-1 pl-1">
                                        <a href="{{route('satuan_pendidikan.show', ['satuan_pendidikan'=>$data->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                            class="fas fa-eye text-white"></i></a>
                                    </div>
                                    <div class="col-4 pr-1 pl-1">
                                        <a href="{{route('satuan_pendidikan.edit', ['satuan_pendidikan'=>$data->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                                            class="fas fa-pen text-white"></i></a>
                                    </div>
                                    <div class="col-4 pr-1 pl-1">
                                        <form action="{{route('satuan_pendidikan.destroy', ['satuan_pendidikan'=>$data->id])}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                                class="fas fa-trash text-white"></i></a>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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