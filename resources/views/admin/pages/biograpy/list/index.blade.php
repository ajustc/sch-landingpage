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

                <h1>Mengelola biograpylist</h1>
                <a href="biograpylist/create" class="btn btn-primary mb-2">Create biograpy list</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Sub Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">List 1</th>
                            <th scope="col">List 2</th>
                            <th scope="col">List 3</th>
                            <th scope="col">List 4</th>
                            <th scope="col">Description</th>
                            <th scope="col">Unuse</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $bl)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $bl->bl_title ?></td>
                            <td><?php echo $bl->bl_sub_title ?></td>
                            <td><?php echo $bl->bl_image ?></td>
                            <td><?php echo $bl->bl_list1 ?></td>
                            <td><?php echo $bl->bl_list2 ?></td>
                            <td><?php echo $bl->bl_list3 ?></td>
                            <td><?php echo $bl->bl_list4 ?></td>
                            <td><?php echo $bl->bl_desc ?></td>
                            <td><a href="" class="btn btn-secondary mr-2">Use</a></td>
                            <td class="d-flex">
                                <a href="biograpylist/<?php echo $bl->bl_id ?>/edit" class="btn btn-warning mr-2">Edit</a>
                                <form action="biograpylist/<?php echo $bl->bl_id ?>" method="POST">
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