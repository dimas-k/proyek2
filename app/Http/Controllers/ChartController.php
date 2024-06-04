<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\HakCipta;

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
    }
}
