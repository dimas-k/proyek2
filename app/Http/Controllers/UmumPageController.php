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

        $paten2024 = Paten::whereYear('tanggal_permohonan','2024')->count();
        $hc2024 = HakCipta::whereYear('tanggal_permohonan','2024')->count();
        $di2024 = DesainIndustri::whereYear('tanggal_permohonan','2024')->count();

        $gabungKi2024 = $paten2024 + $di2024 + $hc2024 ;

        return view('umum-page.landing-page.index',compact('paten', 'di', 'hc','gabungKi2024'));
    }
}
