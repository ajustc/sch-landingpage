@extends('admin.layout.template')
@section('title', 'activity')
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

                <h1>Mengelola activity</h1>
                <a href="activity/create" class="btn btn-primary mb-2">Create activity</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created</th>
                            <th scope="col">Updated</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $activity)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $activity->activity_image ?></td>
                            <td><?php echo $activity->created_at?></td>
                            <td><?php echo $activity->updated_at?></td>
                            <td><a href="" class="btn btn-secondary mr-2">Use</a></td>
                            <td class="d-flex">
                                <a href="activity/<?php echo $activity->activity_id ?>/edit"
                                    class="btn btn-warning mr-2">Edit</a>
                                <form action="activity/<?php echo $activity->activity_id ?>" method="POST">
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