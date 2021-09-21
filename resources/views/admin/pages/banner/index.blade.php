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

                <h1>Jangan coba coba, belajar</h1>
                <a href="banner/create" class="btn btn-primary">Create Banner</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Use</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $banner)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $banner->banner_title ?></td>
                            <td><?php echo $banner->banner_description ?></td>
                            <td><?php echo $banner->banner_picture ?></td>
                            <td>
                                <?php
                                if ($banner->banner_use == "used") {
                                ?>
                                    <form action="banner/used/<?php echo $banner->banner_id ?>" method="POST">
                                        <?php echo csrf_field() ?>
                                        <button type="submit" class="btn btn-success disabled" disabled>Used</button>
                                    </form>
                                <?php
                                } else {
                                ?>
                                    <form action="banner/used/<?php echo $banner->banner_id ?>" method="POST">
                                        <?php echo csrf_field() ?>
                                        <button type="submit" class="btn btn-success">Use</button>
                                    </form>
                                <?php
                                }
                                ?>
                            </td>
                            <td class="d-flex">
                                <a href="banner/<?php echo $banner->banner_id ?>/edit" class="btn btn-warning">Edit</a>
                                <form action="banner/<?php echo $banner->banner_id ?>" method="POST">
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