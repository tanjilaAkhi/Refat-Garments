<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NCLController extends Controller
{
    public function index()
    {
        return view ('backend.NCL.index');
    }

    public function third_party()
    {
        return view ('backend.NCL.3P-defect_rate');
    }

    public function da()
    {
        return view ('backend.NCL.DA-defect_rate');
    }

    public function top_defect()
    {
        return view ('backend.NCL.top-defects');
    }

    public function defect_pass_rate()
    {
        return view ('backend.NCL.Defect-pass_rate');
    }

    public function defect_fail_rate()
    {
        return view ('backend.NCL.Defect-fail_rate');
    }

    public function audit_pass()
    {
        return view('backend.NCL.shipment_pass-audit');
    }

    public function recheck_count()
    {
        return view('backend.NCL.recheck_count');
    }

}
