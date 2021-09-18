@extends('admin.layout.template')
@section('title', 'Title Price')
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

                <h1>Mengelola Judul</h1>
                <a href="pricetitle/create" class="btn btn-primary mb-2">Create judul</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <!-- <th scope="col">Title</th> -->
                            <th scope="col">Title</th>
                            <th scope="col">Sub Title</th>
                            <th scope="col">Use</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $pricetitle)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $pricetitle->tp_title ?></td>
                            <td><?php echo $pricetitle->tp_sub_title ?></td>
                            <td><a href="" class="btn btn-secondary mr-2">Unuse</a></td>
                            <td class="d-flex">
                                <a href="pricetitle/<?php echo $pricetitle->tp_id ?>/edit"
                                    class="btn btn-warning mr-2">Edit</a>
                                <form action="pricetitle/<?php echo $pricetitle->tp_id ?>" method="POST">
                                    @method('DELETE')
                                    <?php echo csrf_field() ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    @endSection