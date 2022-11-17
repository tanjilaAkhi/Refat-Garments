<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CCLController extends Controller
{
    public function index()
    {
        return view ('backend.CCL.index');
    }

    public function third_party()
    {
        return view ('backend.CCL.3P-defect_rate');
    }

    public function da()
    {
        return view ('backend.CCL.DA-defect_rate');
    }

    public function top_defect()
    {
        return view ('backend.CCL.top-defects');
    }

    public function defect_pass_rate()
    {
        return view ('backend.CCL.Defect-pass_rate');
    }

    public function defect_fail_rate()
    {
        return view ('backend.CCL.Defect-fail_rate');
    }

    public function audit_pass()
    {
        return view('backend.CCL.shipment_pass-audit');
    }

    public function recheck_count()
    {
        return view('backend.CCL.recheck_count');
    }


}
