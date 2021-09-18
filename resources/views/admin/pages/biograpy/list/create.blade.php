@extends('admin.layout.template')
@section('title', 'biograpy list')
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

                <form action="/adminpages/biograpylist" method="POST" enctype="multipart/form-data">
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
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="list1" class="form-label">List 1</label>
                        <input type="text" class="form-control" id="list1" name="list1">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="list2" class="form-label">list 2</label>
                        <input type="text" class="form-control" id="list2" name="list2">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="list3" class="form-label">List 3</label>
                        <input type="text" class="form-control" id="list3" name="list3">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="list4" class="form-label">List 4</label>
                        <input type="text" class="form-control" id="list4" name="list4">
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