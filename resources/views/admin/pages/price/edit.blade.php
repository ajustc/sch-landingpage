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

                <form action="/adminpages/price/<?php echo $data->price_id; ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3 col-lg-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="<?php echo $data->price_title ?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $data->price_name ?>">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="<?php echo $data->price_nominal ?>">
                    </div>
                    <button type="submit" class="btn btn-primary ml-2">Save Change</button>
                </form>

            </div>
        </div>
    </div>

    @endSection