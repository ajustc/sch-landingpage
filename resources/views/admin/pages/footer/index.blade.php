@extends('admin.layout.template')
@section('title', 'footer')
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

                <h1>Mengelola Footer</h1>
                <a href="footer/create" class="btn btn-primary mb-2">Create Footer</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $footer)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $footer->footer_name ?></td>
                            <td><?php echo $footer->footer_description ?></td>
                            <td class="d-flex">
                                <a href="footer/<?php echo $footer->footer_id ?>/edit"
                                    class="btn btn-warning mr-2">Edit</a>
                                <form action="footer/<?php echo $footer->footer_id ?>" method="POST">
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