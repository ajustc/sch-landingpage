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

                <form action="/adminpages/visimisi" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="desc" name="desc">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="vspict" class="form-label">VS Picture</label>
                        <input type="text" class="form-control" id="vspict" name="vspict">
                    </div> -->
                    <div class="mb-3">
                        <label for="vstitle" class="form-label">VS Title</label>
                        <input type="text" class="form-control" id="vstitle" name="vstitle">
                    </div>
                    <div class="mb-3">
                        <label for="vsdesc" class="form-label">VS Description</label>
                        <input type="text" class="form-control" id="vsdesc" name="vsdesc">
                    </div>
                    <div class="mb-3">
                        <label for="pict" class="form-label">Picture</label>
                        <input class="form-control" type="file" id="pict" name="pict">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

    @endSection