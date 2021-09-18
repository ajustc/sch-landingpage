@extends('admin.layout.template')
@section('title', 'Price')
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

                <form class="row g-2" action="/adminpages/price" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field() ?>
                    <div class="mb-3 col-lg-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="sub_name" class="form-label">Sub Name</label>
                        <input type="text" class="form-control" id="sub_name" name="sub_name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="desc" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="list1" class="form-label">List 1</label>
                        <input type="text" class="form-control" id="list1" name="list1">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="list2" class="form-label">List 2</label>
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
                        <label for="list5" class="form-label">List 5</label>
                        <input type="text" class="form-control" id="list5" name="list5">
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Submit</button>
                </form>

            </div>
        </div>
    </div>

    @endSection