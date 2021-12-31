
@extends('admin.includes.app')

@section('adminSection')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card recent-sales">

                                <div class="card-body">
                                    <h5 class="card-title"> All Drops </h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                                <td>$64</td>

                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>

                 

                    </div>
                </div>


            </div>
        </section>

    </main>


    @endsection
    



