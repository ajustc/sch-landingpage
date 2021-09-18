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
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/adminpages') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/banner') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Banner</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/visimisi') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Visi & Misi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/biograpylist') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Biograpy List</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/biograpy') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Biografi </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/activity') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Kegiatan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/graduet') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Kelulusan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/pricetitle') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Judul Tampilan Biaya pendaftaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/price') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Biaya pendaftaran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/contact') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Contact</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/adminpages/footer') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Mengelola Footer</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->