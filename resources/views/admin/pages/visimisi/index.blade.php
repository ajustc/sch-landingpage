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
                <a href="visimisi/create" class="btn btn-primary">Create Visi Misi</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $visimisi)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $visimisi->visimisi_title ?></td>
                            <td><?php echo $visimisi->visimisi_description ?></td>
                            <td><?php echo $visimisi->visimisi_picture ?></td>
                            <td>
                                <?php
                                if ($visimisi->visimisi_use == "used") {
                                ?>
                                    <form action="visimisi/used/<?php echo $visimisi->visimisi_id ?>" method="POST">
                                        <?php echo csrf_field() ?>
                                        <button type="submit" class="btn btn-success disabled" disabled>Used</button>
                                    </form>
                                <?php
                                } else {
                                ?>
                                    <form action="visimisi/used/<?php echo $visimisi->visimisi_id ?>" method="POST">
                                        <?php echo csrf_field() ?>
                                        <button type="submit" class="btn btn-success">Use</button>
                                    </form>
                                <?php
                                }
                                ?>
                            </td>
                            <td class="d-flex">
                                <a href="visimisi/<?php echo $visimisi->visimisi_id ?>/edit" class="btn btn-warning">Edit</a>
                                <form action="visimisi/<?php echo $visimisi->visimisi_id ?>" method="POST">
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