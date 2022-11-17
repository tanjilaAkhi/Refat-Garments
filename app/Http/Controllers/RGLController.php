<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RGLController extends Controller
{
    public function index()
    {
        return view ('backend.RGL.index');
    }

    public function third_party()
    {
        return view ('backend.RGL.3P-defect_rate');
    }

    public function da()
    {
        return view ('backend.RGL.DA-defect_rate');
    }

    public function top_defect()
    {
        return view ('backend.RGL.top-defects');
    }

    public function defect_pass_rate()
    {
        return view ('backend.RGL.Defect-pass_rate');
    }

    public function defect_fail_rate()
    {
        return view ('backend.RGL.Defect-fail_rate');
    }

    public function audit_pass()
    {
        return view('backend.RGL.shipment_pass-audit');
    }

    public function recheck_count()
    {
        return view('backend.RGL.recheck_count');
    }

}
