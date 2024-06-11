<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paten;
use App\Models\HakCipta;
use App\Models\DesainIndustri;

class UmumPageController extends Controller
{
    public function index()
    {
        $paten = Paten::all()->count();
        $di = DesainIndustri::all()->count();
        $hc = HakCipta::all()->count();

        return view('umum-page.landing-page.index',compact('paten', 'di', 'hc'));
    }
}
