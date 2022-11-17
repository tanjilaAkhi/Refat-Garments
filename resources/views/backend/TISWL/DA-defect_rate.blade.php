@extends('backend.master')
@section('content')
    <div class="container mt-5">
        <a class="btn btn-sm btn-primary " style="margin-left: 20px; margin-right: 1000px;" href="{{ route('tiswl.defect_rate.third_party') }}">Back</a>

        {{-- button hide --authorization --}}

        {{-- button section --}}


        <a class="btn btn-sm btn-success " href="#">PDF</a>
        <a class="btn btn-sm btn-warning " href="#">Excel</a>
        <a class="btn btn-sm btn-danger " href="#"><i class="fa-regular fa-trash-can"></i>Trash</a>
        {{-- button section --}}

        <div class="card mt-3">
            <h4 style="text-align: center">DA Findings Final Audit (Only Pass Audit)</h4>
            <div class="card-body">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Date</th>
                            <th scope="col">Style</th>
                            <th scope="col">Brand</th>
                            <th scope="col">PO</th>
                            <th scope="col">Order QTY</th>
                            <th scope="col">Ship QTY</th>
                            <th scope="col">Sample QTY</th>
                            <th scope="col">Total Defect</th>
                            <th scope="col">Total Defect %</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

