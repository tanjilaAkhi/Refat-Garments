<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TISWLController extends Controller
{
    public function index()
    {
        return view ('backend.TISWL.index');
    }

    public function third_party()
    {
        return view ('backend.TISWL.3P-defect_rate');
    }

    public function da()
    {
        return view ('backend.TISWL.DA-defect_rate');
    }

    public function top_defect()
    {
        return view ('backend.TISWL.top-defects');
    }

    public function defect_pass_rate()
    {
        return view ('backend.TISWL.Defect-pass_rate');
    }

    public function defect_fail_rate()
    {
        return view ('backend.TISWL.Defect-fail_rate');
    }

    public function audit_pass()
    {
        return view('backend.TISWL.shipment_pass-audit');
    }

    public function recheck_count()
    {
        return view('backend.TISWL.recheck_count');
    }

}
