@extends('layouts.app')

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">New Category</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                                    <li class="breadcrumb-item active">New Category</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('store_category') }}" class="p-4">
                                    @if (session('success'))
                                        <div class="alert alert-primary alert-modern alert-dismissible fade show" role="alert">
                                            <i class="bi bi-info-circle icons"></i><strong>Success</strong> <i class="ps-4">{{ session('success') }}</i>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="container row ps-4">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Category Price</label>
                                            <input type="number" class="form-control" name="price" id="price">
                                        </div>

                                    </div>

                                    <div class="hstack pt-2 d-flex justify-content-center gap-2 mt-4">
                                        <button type="submit" class="btn btn-primary">Create Category</button>
                                        <button type="button" class="btn btn-light">Discard</button>
                                    </div>
                                </form>

                            </div>
                        </div>
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
