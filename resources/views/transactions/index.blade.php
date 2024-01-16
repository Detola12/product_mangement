
@extends('layouts.app')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-primary alert-modern alert-dismissible fade show" role="alert">
                        <i class="bi bi-info-circle icons"></i><strong>Success</strong> <i class="ps-4">{{ session('success') }}</i>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            @endif

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Transaction List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                    <li class="breadcrumb-item active">Transaction List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row pb-4 gy-3">
                    <div class="col-sm-4">
                        <a href="transaction-new.html" class="btn btn-primary"><i class="las la-plus me-1"></i>Add Transaction</a>
                    </div>

                    <div class="col-sm-auto ms-auto">
                        <div class="d-flex gap-3">
                            <div class="search-box">
                                <input type="text" class="form-control" id="searchMemberList" placeholder="Search for result">
                                <i class="las la-search search-icon"></i>
                            </div>
                            <div class="">
                                <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info btn-icon fs-14"><i class="las la-ellipsis-v fs-18"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li><a class="dropdown-item" href="#">All</a></li>
                                    <li><a class="dropdown-item" href="#">Last Week</a></li>
                                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                                    <li><a class="dropdown-item" href="#">Last Year</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-hover table-nowrap align-middle mb-0">
                                        <thead>
                                        <tr class="text-muted text-uppercase">
                                            <th scope="col">Id</th>
                                            <th scope="col">Customer's Name</th>
                                            <th scope="col">Product Bought</th>
                                            <th scope="col">Units Bought</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Amount Payed</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @if($trans)
                                        @foreach($trans as $unit)
                                        <tr class="">
                                            <td>{{ $unit->id }}</td>
                                            <td>{{ $unit->customer->first_name }}</td>
                                            <td>{{ $unit->category->name }}</td>
                                            <td>{{ $unit->units }}</td>
                                            <td>{{ $unit->total_cost }}</td>
                                            <td>{{ $unit->payed }}</td>
                                            <td>
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                    <a href="{{ route('create_payment', $unit->id) }}" class="btn btn-soft-info btn-sm d-inline-block">
                                                        <i class="las la-pen fs-17 align-middle"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove">
                                                    <a href="{{ route('delete_transaction', $unit->id) }}" class="btn btn-soft-danger btn-sm d-inline-block">
                                                        <i class="las la-file-download fs-17 align-middle"></i>
                                                    </a>
                                                </li>
                                            </td>

                                        </tr>
                                        @endforeach
                                            @endif

                                        </tbody>

                                        <!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-4 gy-3">
                    <div class="col-md-5">
                        <p class="mb-0 text-muted">Showing <b>1</b> to <b>5</b> of <b>10</b> results</p>
                    </div>
                    <div class="col-sm-auto ms-auto">
                        <nav aria-label="...">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Invoika.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection
