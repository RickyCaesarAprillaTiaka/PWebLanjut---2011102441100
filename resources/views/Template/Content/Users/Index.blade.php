@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Users')
@push('ButtonAction')
<a href="{{route('user.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
    class="fas fa-plus fa-sm text-white-50"></i> Create User</a>
@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Table User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>No Hp</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>No Hp</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>#</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data_users as $data)
                        <tr>
                            <td>{{$data->email}}</td>
                            <td>{{$data->nama_lengkap}}</td>
                            <td>{{$data->no_hp}}</td>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->updated_at}}</td>
                            <td>
                                <div class="row p-1">
                                    <div class="col-4 pr-1 pl-1">
                                        <a href="{{route('user.show', ['user'=>$data->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                            class="fas fa-eye text-white"></i></a>
                                    </div>
                                    <div class="col-4 pr-1 pl-1">
                                        <a href="{{route('user.edit', ['user'=>$data->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                                            class="fas fa-pen text-white"></i></a>
                                    </div>
                                    <div class="col-4 pr-1 pl-1">
                                        <form action="{{route('user.destroy', ['user'=>$data->id])}}" method="post">
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