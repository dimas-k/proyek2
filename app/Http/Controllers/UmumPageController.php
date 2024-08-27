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

        $contohPaten = Paten::where('status','Diberi')->count();
        $contohDi = DesainIndustri::where('status','Diberi')->count();
        $contohHc = HakCipta::where('status','Tercatat')->count();

        $paten2024 = Paten::whereYear('tanggal_permohonan','2024')->count();
        $hc2024 = HakCipta::whereYear('tanggal_permohonan','2024')->count();
        $di2024 = DesainIndustri::whereYear('tanggal_permohonan','2024')->count();
        $gabungKi2024 = $paten2024 + $di2024 + $hc2024 ;

        $paten2025 = Paten::whereYear('tanggal_permohonan','2025')->count();
        $hc2025 = HakCipta::whereYear('tanggal_permohonan','2025')->count();
        $di2025 = DesainIndustri::whereYear('tanggal_permohonan','2025')->count();
        $gabungKi2025 = $paten2025 + $di2025 + $hc2025 ;

        $paten2026 = Paten::whereYear('tanggal_permohonan','2026')->count();
        $hc2026 = HakCipta::whereYear('tanggal_permohonan','2026')->count();
        $di2026 = DesainIndustri::whereYear('tanggal_permohonan','2026')->count();
        $gabungKi2026 = $paten2026 + $di2026 + $hc2026 ;

        $paten2027 = Paten::whereYear('tanggal_permohonan','2027')->count();
        $hc2027 = HakCipta::whereYear('tanggal_permohonan','2027')->count();
        $di2027 = DesainIndustri::whereYear('tanggal_permohonan','2027')->count();
        $gabungKi2027 = $paten2027 + $di2027 + $hc2027 ;

        $jurusan_Ti_Paten = Paten::where('jurusan','Teknik Informatika')->count();

        return view('umum-page.landing-page.index',compact('contohPaten','contohDi','contohHc','paten', 'di', 'hc','gabungKi2024','gabungKi2025','gabungKi2026','gabungKi2027','paten2024','paten2025','paten2026','paten2027','hc2024','hc2025','hc2026','hc2027','di2024','di2025','di2026','di2027'));
    }
}
