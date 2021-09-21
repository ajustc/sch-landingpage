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
                <a href="visimisilist/create" class="btn btn-primary">Create List Visi Misi</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $visimisilist)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $visimisilist->visimisi_list_title ?></td>
                            <td><?php echo $visimisilist->visimisi_list_description ?></td>
                            <td class="d-flex">
                                <a href="visimisilist/<?php echo $visimisilist->visimisi_list_id ?>/edit" class="btn btn-warning">Edit</a>
                                <form action="visimisilist/<?php echo $visimisilist->visimisi_list_id ?>" method="POST">
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