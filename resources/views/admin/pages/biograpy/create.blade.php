@extends('admin.layout.template')
@section('title', 'biograpy')
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

                <form action="/adminpages/biograpy" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3 col-lg-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="sub_title" class="form-label">Sub Title</label>
                        <textarea type="text" class="form-control" id="sub_title" name="sub_title"></textarea>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="desc" name="desc"></textarea>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc1" class="form-label">Description 1</label>
                        <textarea type="text" class="form-control" id="desc1" name="desc1"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Submit</button>
                </form>

            </div>
        </div>
    </div>

    @endSection