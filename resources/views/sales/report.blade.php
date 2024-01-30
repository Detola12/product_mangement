@extends('layouts.app')

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Sale Report</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Report</a></li>
                                    <li class="breadcrumb-item active">Sale Report</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row pb-4 gy-3">
                    <div class="col-sm-4">
                        <div class="d-flex">
                            <div class="search-box">
                                <input type="text" class="form-control" placeholder="Search for Result">
                                <i class="las la-search search-icon"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-auto ms-auto">
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-soft-primary fs-14"><i class="las la-filter fs-16 align-middle me-2"></i>Filter</button>
                            <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info btn-icon fs-14"><i class="las la-ellipsis-v fs-18"></i></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <li><a class="dropdown-item" href="#">Print</a></li>
                                <li><a class="dropdown-item" href="#">Export to Excel</a></li>
                            </ul>
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
                                            <th scope="col">Invoice ID</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col" style="width: 12%;">Discounts</th>
                                            <th scope="col" style="width: 12%;">Amount</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2152</p></td>
                                            <td>20 Sep, 2022</td>
                                            <td>
                                                Fashion
                                            </td>
                                            <td>$240.00</td>
                                            <td>10%</td>
                                            <td>$190.00</td>
                                        </tr>

                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2153</p></td>
                                            <td>12 Arl, 2022</td>
                                            <td>
                                                Accessories
                                            </td>
                                            <td>$390.00</td>
                                            <td>15%</td>
                                            <td>$280.00</td>
                                        </tr>

                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2154</p></td>
                                            <td>28 Mar, 2022</td>
                                            <td>
                                                Furniture
                                            </td>
                                            <td>$440.00</td>
                                            <td>25%</td>
                                            <td>$350.00</td>
                                        </tr>

                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2155</p></td>
                                            <td>23 Aug, 2022</td>
                                            <td>
                                                Accessories
                                            </td>
                                            <td>$520.00</td>
                                            <td>20%</td>
                                            <td>$460.00</td>
                                        </tr>

                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2156</p></td>
                                            <td>18 Sep, 2022</td>
                                            <td>
                                                Fashion
                                            </td>
                                            <td>$480.00</td>
                                            <td>15%</td>
                                            <td>$390.00</td>
                                        </tr>

                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2157</p></td>
                                            <td>12 Feb, 2022</td>
                                            <td>
                                                Furniture
                                            </td>
                                            <td>$550.00</td>
                                            <td>30%</td>
                                            <td>$360.00</td>
                                        </tr>

                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2158</p></td>
                                            <td>30 Nov, 2022</td>
                                            <td>
                                                Fashion
                                            </td>
                                            <td>$170.00</td>
                                            <td>20%</td>
                                            <td>$90.00</td>
                                        </tr>

                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2159</p></td>
                                            <td>23 Sep, 2022</td>
                                            <td>
                                                Accessories
                                            </td>
                                            <td>$720.00</td>
                                            <td>10%</td>
                                            <td>$620.00</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2160</p></td>
                                            <td>16 Aug, 2022</td>
                                            <td>
                                                Fashion
                                            </td>
                                            <td>$820.00</td>
                                            <td>15%</td>
                                            <td>$630.00</td>
                                        </tr>
                                        <tr>
                                            <td><p class="fw-medium mb-0">Lec-2161</p></td>
                                            <td>15 Des, 2022</td>
                                            <td>
                                                Fashion
                                            </td>
                                            <td>$750.00</td>
                                            <td>10%</td>
                                            <td>$690.00</td>
                                        </tr>
                                        </tbody><!-- end tbody -->
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
