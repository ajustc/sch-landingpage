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

                <form action="/adminpages/visimisi/<?php echo $data->visimisi_id; ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <input type="hidden" name="oldLogo" value="<?php echo $data->visimisi_logo ?>">
                    <input type="hidden" name="oldPict" value="<?php echo $data->visimisi_picture ?>">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" value="<?php echo $data->visimisi_title ?>" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="desc" value="<?php echo $data->visimisi_description ?>" name="desc">
                    </div>
                    <div class="mb-3">
                        <label for="pict" class="form-label">Picture</label>
                        <input class="form-control" type="file" id="pict" value="<?php echo $data->visimisi_picture ?>" name="pict">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </form>

            </div>
        </div>
    </div>

    @endSection