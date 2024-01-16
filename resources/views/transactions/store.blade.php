@php
    $bid = 0;
@endphp

@extends('layouts.app')

@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">New Transaction</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Transaction</a></li>
                                    <li class="breadcrumb-item active">New Transaction</li>
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
                                <div class="p-2">
                                    <form method="post" action="{{ route('store_transaction', $user->id) }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="brand">Customer name</label>
                                                    <input id="brand" name="brand" placeholder="" disabled value="{{ $user->last_name }} {{ $user->first_name }}" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <p>Cost: <span id="cost">0</span></p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="option" class="form-label">Category</label>
                                                    <select class="form-select" data-trigger name="option"
                                                            id="option" cost = "">
                                                        <option value="0">Select</option>
                                                        @foreach($category as $unit)
                                                        <option onclick="" value="{{ $unit->id }}" price = {{ $unit->price }} >{{ $unit->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="choices-single-specifications" class="form-label">Amount of bags</label>
                                                    <input class="form-control" type="number" name="amount" data-id id="amount">

                                                </div>
                                            </div>
                                        </div>
                                        {{--<script>
                                            function calc(){
                                                var operation = document.getElementById('cost');
                                                var price = operation[2].attributes[2].value;
                                                var units = document.getElementById('amount').value;
                                                var total = price * units;

                                                return total;
                                            }
                                            var result = document.getElementById('result');
                                            result.textContent = 'Total Cost: ' + calc();

                                        </script>--}}


                                        <div class="hstack gap-2 mt-4">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn">Discard</button>
                                            <button type="button" id="check" class="btn btn-light ms-auto">Check Cost</button>
                                            <button type="button" id="clear" class="btn btn-light">Clear Cost</button>

                                        </div>

                                    </form>


                                </div>
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
