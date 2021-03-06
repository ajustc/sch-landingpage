@extends('admin.layout.template')
@section('title', 'Price')
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

                <h1>Mengelola Register</h1>
                <a href="price/create" class="btn btn-primary mb-2">Create price</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <!-- <th scope="col">Title</th> -->
                            <th scope="col">Name</th>
                            <th scope="col">Sub Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">List 1</th>
                            <th scope="col">List 2</th>
                            <th scope="col">List 3</th>
                            <th scope="col">List 4</th>
                            <th scope="col">List 5</th>
                            <th scope="col">Use</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $price)
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $price->price_name ?></td>
                            <td><?php echo $price->price_sub_name ?></td>
                            <td><?php echo $price->price_nominal ?></td>
                            <td><?php echo $price->price_list1 ?></td>
                            <td><?php echo $price->price_list2 ?></td>
                            <td><?php echo $price->price_list3 ?></td>
                            <td><?php echo $price->price_list4 ?></td>
                            <td><?php echo $price->price_list5 ?></td>
                            <td><a href="" class="btn btn-secondary mr-2">Unuse</a></td>
                            <td class="d-flex">
                                <a href="price/<?php echo $price->price_id ?>/edit"
                                    class="btn btn-warning mr-2">Edit</a>
                                <form action="price/<?php echo $price->price_id ?>" method="POST">
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