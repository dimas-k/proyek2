<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\HakCipta; // Ganti dengan model Anda

class ChartController extends Controller
{
    public function chartData(Request $request)
    {
        $years = HakCipta::select(DB::raw('YEAR(tanggal_permohonan) as year'))
            ->groupBy('year')
            ->pluck('year');

        $data = [];
        foreach ($years as $year) {
            $data[$year] = HakCipta::whereYear('tanggal_permohonan', $year)
                ->count();
        }

        return response()->json([
            'labels' => $years->toArray(),
            'datasets' => [
                [
                    'label' => 'Jumlah Hak Cipta',
                    'data' => array_values($data),
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'borderWidth' => 1,
                ]
            ]
        ]);
        // return view('umum-page.landing-page.index',compact('years','data'));
    }
}

// {
//     public function chartData(Request $request)
//     {
//         $years = HakCipta::select('year')->groupBy('year')->pluck('year');
//         $data = [1,2,3];

//         foreach ($years as $year) {
//             $data[$year] = HakCipta::where('year', $year)->sum('value');
//         }

//         return response()->json([
//             'labels' => $years->toArray(),
//             'datasets' => [
//                 [
//                     'label' => 'Data',
//                     'data' => array_values($data),
//                     'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
//                     'borderColor' => 'rgba(75, 192, 192, 1)',
//                     'borderWidth' => 1,
//                 ]
//             ]
//         ]);
//         return view('umum-page.Hakcipta.index', compact('data'));

//     }
// }
