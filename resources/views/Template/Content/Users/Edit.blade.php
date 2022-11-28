@extends('Template.Layout.Dashboard.Main')
@section('Title', 'Edit Users')
@push('ButtonAction')

@endpush
@section('Content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
    </div>
    <div class="card-body">
        <form action="{{route('user.update', ['user' => $user->id])}}" method="post">
            @csrf
            @method("PUT")

            Email : <input type="email" name="email"><br>
            Nama Lengkap : <input type="text" name="nama_lengkap"><br>
            No Hp : <input type="text" name="no_hp"><br>
            Password : <input type="password" name="password"><br>
            Level : 
            <select name="level_user">
                <option value="0">Super</option>
                <option value="1">Admin</option>
                <option value="2">Public</option>
            </select>
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