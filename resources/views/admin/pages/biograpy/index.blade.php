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

                <h1>Mengelola biograpy</h1>
                <a href="biograpy/create" class="btn btn-primary mb-2">Create biograpy</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Sub Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Description 1</th>
                            <th scope="col">Unuse</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $biograpy)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $biograpy->biograpy_title ?></td>
                            <td><?php echo $biograpy->biograpy_sub_title ?></td>
                            <td><?php echo $biograpy->biograpy_desc ?></td>
                            <td><?php echo $biograpy->biograpy_desc1 ?></td>
                            <td><a href="" class="btn btn-secondary mr-2">Use</a></td>
                            <td class="d-flex">
                                <a href="biograpy/<?php echo $biograpy->biograpy_id ?>/edit"
                                    class="btn btn-warning mr-2">Edit</a>
                                <form action="biograpy/<?php echo $biograpy->biograpy_id ?>" method="POST">
                                    @method('DELETE')
                                    <?php echo csrf_field() ?>
                                    <button type="submit" class="btn btn-danger mr-2">Delete</button>
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