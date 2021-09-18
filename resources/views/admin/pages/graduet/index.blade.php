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

                <h1>Mengelola Graduet</h1>
                <a href="graduet/create" class="btn btn-primary mb-2">Create Graduet</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Unuse</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $graduet)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $graduet->graduet_name ?></td>
                            <td><?php echo $graduet->graduet_date ?></td>
                            <td><?php echo $graduet->graduet_desc ?></td>
                            <td><a href="" class="btn btn-secondary mr-2">Use</a></td>
                            <td class="d-flex">
                                <a href="graduet/<?php echo $graduet->graduet_id ?>/edit"
                                    class="btn btn-warning mr-2">Edit</a>
                                <form action="graduet/<?php echo $graduet->graduet_id ?>" method="POST">
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