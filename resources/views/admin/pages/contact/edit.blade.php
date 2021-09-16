@extends('admin.layout.template')
@section('title', 'contact')
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

                <form action="/adminpages/contact/<?php echo $data->contact_id; ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3 col-lg-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="<?php echo $data->contact_address?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Kode_Pos</label>
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                            value="<?php echo $data->contact_kode_pos?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Telpon</label>
                        <input type="text" class="form-control" id="telpon" name="telpon"
                            value="<?php echo $data->contact_tlpn?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?php echo $data->contact_email?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="appointment_time" class="form-label">Opening Hour</label>
                        <input type="time" class="form-control appointment_time" id="opening" name="opening"
                            value="<?php echo $data->contact_opening?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="appointment_time" class="form-label">Close Time</label>
                        <input type="time" class="form-control appointment_time" id="close_time" name="close_time"
                            value="<?php echo $data->contact_close?>">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @endSection