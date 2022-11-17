@extends('backend.master')
@section('content')
    <div class="container mt-5">
        <a class="btn btn-sm btn-primary " style="margin-left: 20px; margin-right: 1000px;" href="{{ route('tiswl.index') }}">Back</a>

        {{-- button hide --authorization --}}

        {{-- button section --}}


        <a class="btn btn-sm btn-success " href="#">PDF</a>
        <a class="btn btn-sm btn-warning " href="#">Excel</a>
        <a class="btn btn-sm btn-danger " href="#"><i class="fa-regular fa-trash-can"></i>Trash</a>
        {{-- button section --}}

        <div class="card mt-3">
            <h4 style="text-align: center">Final Inspection Findings</h4>
            <h6 style="text-align: center">Top 10 Defects</h6>
            <div class="card-body">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Defect Type</th>
                            <th scope="col">Defect Count</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

