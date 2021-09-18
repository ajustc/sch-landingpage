@extends('admin.layout.template')
@section('title', 'Contact')
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

                <h1>Mengelola Contact</h1>
                <a href="contact/create" class="btn btn-primary mb-2">Create Contact</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Sub Title</th>
                                <th scope="col">Address</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Telpon</th>
                                <th scope="col">Opening Hours</th>
                                <th scope="col">Closing Time</th>
                                <th scope="col">Use</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $contact)
                            <tr>
                                <th scope="row">1</th>
                                <td><?php echo $contact->contact_title ?></td>
                                <td><?php echo $contact->contact_sub_title ?></td>
                                <td><?php echo $contact->contact_address ?></td>
                                <td><?php echo $contact->contact_kode_pos ?></td>
                                <td><?php echo $contact->contact_email ?></td>
                                <td><?php echo $contact->contact_tlpn ?></td>
                                <td><?php echo $contact->contact_opening ?></td>
                                <td><?php echo $contact->contact_close ?></td>
                                <td><a href="" class="btn btn-secondary mr-2">Unuse</a></td>
                                <td class="d-flex">
                                    <a href="contact/<?php echo $contact->contact_id ?>/edit"
                                        class="btn btn-warning mr-2">Edit</a>
                                    <form action="contact/<?php echo $contact->contact_id ?>" method="POST">
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
    </div>

    @endSection