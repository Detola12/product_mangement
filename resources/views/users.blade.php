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
                    @if (session('status'))
                    <div class="alert alert-warning alert-modern alert-dismissible fade show" role="alert">
                        <i class="bi bi-info-circle icons"></i><strong>Success</strong> <i class="ps-4">{{ session('status') }}</i>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
            @endif

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">User</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                    <li class="breadcrumb-item active">User</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row pb-4 gy-3">
                    <div class="col-sm-4">
                        <button class="btn btn-primary addPayment-modal" data-bs-toggle="modal" data-bs-target="#adduserModal"><i class="las la-plus me-1"></i> Add New</button>

                    </div>

                    <div class="col-sm-auto ms-auto">
                        <div class="d-flex gap-3">
                            <div class="search-box">
                                <input type="text" class="form-control" id="searchMemberList" placeholder="Search for Result">
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
                                            <th scope="col">Member Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Registered On</th>
                                            <th scope="col" style="width: 16%;">Status</th>
                                            <th scope="col" style="width: 12%;">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                <a href="#javascript: void(0);" class="text-body align-middle fw-medium">{{ $user->first_name }} {{ $user->last_name }}</a>
                                            </td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->phone_number}}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td><span class="badge bg-success-subtle text-success  p-2">Active</span></td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Store">
                                                        <a href="{{ route('create_transaction', $user->id) }}" class="btn btn-soft-info btn-sm d-inline-block">
                                                            <i class="las la-eye fs-17 align-middle"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a href="#"  data-bs-toggle="modal" data-bs-target="#edituserModal" class="btn btn-soft-info btn-sm d-inline-block">
                                                            <i class="las la-pen fs-17 align-middle"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                        <a href="{{ route('delete_customer', $user->id) }}" class="btn btn-soft-danger btn-sm d-inline-block">
                                                            <i class="las la-file-download fs-17 align-middle"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="edituserModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content border-0">
                                                    <div class="modal-header p-4 pb-0">
                                                        <h5 class="modal-title" id="createMemberLabel">Edit User</h5>
                                                        <button type="button" class="btn-close" id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body p-4">
                                                        <form method="POST" action="{{route('edit_customer', $user->id)}}" autocomplete="off" id="memberlist-form" class="needs-validation" novalidate>
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <input type="hidden" id="memberid-input" class="form-control" value="">
                                                                    <div class="mb-3 mt-4">
                                                                        <label for="Name" class="form-label">First Name</label>
                                                                        <input type="text" class="form-control" value="{{ $user->first_name }}" id="fname" name="fname" >
                                                                        <div class="invalid-feedback">Please Enter a member name.</div>
                                                                    </div>
                                                                    <div class="mb-3 mt-4">
                                                                        <label for="Name" class="form-label">Last Name</label>
                                                                        <input type="text" class="form-control" value="{{ $user->last_name }}" id="lname" name="lname" >
                                                                        <div class="invalid-feedback">Please Enter a member name.</div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="Email" class="form-label">Email</label>
                                                                        <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" >
                                                                        <div class="invalid-feedback">Please Enter a member Email.</div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="teammembersnumber" class="form-label">Phone</label>
                                                                        <input type="text" class="form-control" value="{{ $user->phone_number }}" id="phone" name="phone" >
                                                                        <div class="invalid-feedback">Please enter phone number.</div>
                                                                    </div>
                                                                    {{--
                                                                                                    <div class="mb-4">
                                                                                                        <label for="status" class="form-label">Status</label>
                                                                                                        <select class="form-select" aria-label="Default select example">
                                                                                                            <option selected>Select Status</option>
                                                                                                            <option value="1">Active</option>
                                                                                                            <option value="2">Disabled</option>
                                                                                                        </select>
                                                                                                    </div>--}}

                                                                    <div class="hstack gap-2 justify-content-end">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success" data-id="" id="addNewMember custom-sa-success">Edit User</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--end modal-content-->
                                            </div>
                                            <!--end modal-dialog-->
                                        </div><!--end modal-->

                                        @endforeach
                                        </tbody><!-- end tbody -->
                                    </table>
                                    <!-- end table -->
                                </div><!-- end table responsive -->
                            </div>
                        </div>
                    </div>

                </div>

{{--
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
--}}

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

    <div class="modal fade" id="adduserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header p-4 pb-0">
                    <h5 class="modal-title" id="createMemberLabel">Add User</h5>
                    <button type="button" class="btn-close" id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="{{route('store_customer')}}" autocomplete="off" id="memberlist-form" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="hidden" id="memberid-input" class="form-control" value="">
                                <div class="mb-3 mt-4">
                                    <label for="Name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name" required>
                                    <div class="invalid-feedback">Please Enter a member name.</div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <label for="Name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name" required>
                                    <div class="invalid-feedback">Please Enter a member name.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                    <div class="invalid-feedback">Please Enter a member Email.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="teammembersnumber" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter number" required>
                                    <div class="invalid-feedback">Please enter phone number.</div>
                                </div>
{{--
                                <div class="mb-4">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Disabled</option>
                                    </select>
                                </div>--}}

                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success sa-success" id="addNewMember">Add User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div><!--end modal-->

@endsection
