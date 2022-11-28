<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{route('dashboard.index') == url()->current() ? 'active':''}}">
        <a class="nav-link" href="{{route('dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        PWebLanjut
    </div>

    <!-- Nav Item - PWebLanjut -->
    <li class="nav-item {{route('user.index') == url()->current() ? 'active':''}}">
        <a class="nav-link" href="{{route('user.index')}}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item {{route('kabupaten_kota.index') == url()->current() ? 'active':''}}">
        <a class="nav-link" href="{{route('kabupaten_kota.index')}}">
            <i class="fas fa-map-pin"></i>
            <span>Kabupaten Kota</span></a>
    </li>

    <li class="nav-item {{route('satuan_pendidikan.index') == url()->current() ? 'active':''}}">
        <a class="nav-link" href="{{route('satuan_pendidikan.index')}}">
            <i class="fas fa-school"></i>
            <span>Satuan Pendidikan</span></a>
    </li>

    <li class="nav-item {{route('guru.index') == url()->current() ? 'active':''}}">
        <a class="nav-link" href="{{route('guru.index')}}">
            <i class="fas fa-glasses"></i>
            <span>Guru</span></a>
    </li>

    <li class="nav-item {{route('rombel.index') == url()->current() ? 'active':''}}">
        <a class="nav-link" href="{{route('rombel.index')}}">
            <i class="fas fa-chalkboard"></i>
            <span>Rombel</span></a>
    </li>

    <li class="nav-item {{route('peserta_didik.index') == url()->current() ? 'active':''}}">
        <a class="nav-link" href="{{route('peserta_didik.index')}}">
            <i class="fas fa-book-reader"></i>
            <span>Peserta Didik</span></a>
    </li>

    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{asset('SBAdmin2/img/undraw_rocket.svg')}}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
            and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
            Pro!</a>
    </div>

</ul>
<!-- End of Sidebar -->