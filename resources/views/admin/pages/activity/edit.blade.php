@extends('admin.layout.template')
@section('title', 'banner')
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

                <form action="/adminpages/banner/<?php echo $data->banner_id; ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <input type="hidden" name="oldImage" value="<?php echo $data->activity_image ?>">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </form>

            </div>
        </div>
    </div>

    @endSection