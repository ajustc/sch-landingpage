@extends('admin.layout.template')
@section('title', 'graduet')
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

                <form action="/adminpages/graduet" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3 col-lg-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="desc" name="desc"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Submit</button>
                </form>

            </div>
        </div>
    </div>

    @endSection