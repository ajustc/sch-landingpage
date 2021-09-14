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
                            <th scope="col">VS Picture</th>
                            <th scope="col">VS Title</th>
                            <th scope="col">VS Description</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    @endSection