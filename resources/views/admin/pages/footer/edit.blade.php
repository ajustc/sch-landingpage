@extends('admin.layout.template')
@section('title', 'footer')
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

                <form action="/adminpages/footer/<?php echo $data->footer_id; ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $data->footer_name ?>"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="desc"
                            value="<?php echo $data->footer_description ?>" name="desc">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </form>

            </div>
        </div>
    </div>

    @endSection