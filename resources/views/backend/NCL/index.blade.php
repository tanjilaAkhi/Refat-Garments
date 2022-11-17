@extends('backend.master')
@section('content')
    <div class="container mt-5">
        {{-- <a class="btn btn-sm btn-primary "  href="#">Add New category</a> --}}
        <a class="btn btn-sm btn-success " style="margin-left: 1000px;" href="#">PDF</a>
        <a class="btn btn-sm btn-warning "  href="#">Excel</a>
        <a class="btn btn-sm btn-danger " href="#"><i class="fa-regular fa-trash-can"></i>Trash</a>

        <div class="card mt-3">
            <h4 style="text-align: center">Factory Information List</h4>
            <div class="card-body">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Factory / Unit Name</th>
                            <th scope="col">Month</th>
                            <th scope="col"><a class="btn btn-sm btn-primary" href="{{ route('ncl.defect_rate.third_party') }}">Defect Rate</a></th>
                            <th scope="col"><a class="btn btn-sm btn-primary" href="{{ route('ncl.top-defect') }}">Top Defects</a></th>
                            <th scope="col"><a class="btn btn-sm btn-primary" href="{{ route('ncl.defect_pass_rate') }}">RFT</a></th>
                            <th scope="col"><a class="btn btn-sm btn-primary" href="{{ route('ncl.audit_pass') }}">Shipment Audit</a></th>
                            <th scope="col"><a class="btn btn-sm btn-primary" href="">VCS Claim</a></th>

                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
