@extends('backend.master')
@section('content')
    <div class="container mt-5">
        <a class="btn btn-sm btn-primary " style="margin-left: 20px; margin-right: 900px;" href="{{ route('ncl.recheck_count') }}">Recheck Count</a>

        {{-- button hide --authorization --}}

        {{-- button section --}}


        <a class="btn btn-sm btn-success " href="#">PDF</a>
        <a class="btn btn-sm btn-warning " href="#">Excel</a>
        <a class="btn btn-sm btn-danger " href="#"><i class="fa-regular fa-trash-can"></i>Trash</a>
        {{-- button section --}}

        <div class="card mt-3">
            <h4 style="text-align: center">Shipment Pass Audit Record </h4>
            <h6 style="text-align: center">Next Collections Limited</h6>
            <div class="card-body">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Audit Date</th>
                            <th scope="col">Style</th>
                            <th scope="col">PO's</th>
                            <th scope="col">Order QTY</th>
                            <th scope="col">Ship QTY</th>
                            <th scope="col">Sample QTY</th>
                            <th scope="col">Defect Name in local</th>
                            <th scope="col">Defect Type</th>
                            <th scope="col">Defect QTY</th>
                            <th scope="col">Defect %</th>
                            <th scope="col">Audit Pass Result</th>
                            <th scope="col">Auditor Role</th>
                            <th scope="col">Inspection Platform</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
