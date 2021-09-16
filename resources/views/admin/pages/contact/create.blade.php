@extends('admin.layout.template')
@section('title', 'Contact')
@section('content')

<!-- Page Wrapper -->
<div id="wrapper">

    @include('admin.layout.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('admin.layout.topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <form action="/adminpages/contact" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3 col-lg-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Kode_Pos</label>
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Telpon</label>
                        <input type="text" class="form-control" id="telpon" name="telpon">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="appointment_time" class="form-label">Opening Hour</label>
                        <input type="time" class="form-control appointment_time" id="opening" name="opening">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="appointment_time" class="form-label">Close Time</label>
                        <input type="time" class="form-control appointment_time" id="close_time" name="close_time">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Submit</button>
                </form>

            </div>
        </div>
    </div>

    @endSection