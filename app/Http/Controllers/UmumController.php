<?php

namespace App\Http\Controllers;

use App\Models\DesainIndustri;
use App\Models\HakCipta;
use App\Models\Paten;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paten = Paten::where('institusi', 'Umum')->count();
        $hc = HakCipta::where('institusi', 'Umum')->count();
        $di = DesainIndustri::where('institusi', 'Umum')->count();;
        return view('umum.index', compact('paten', 'hc', 'di'));
    }
    public function paten()
    {
        $paten = Paten::where('institusi', 'Umum')->get();
        return view('umum.paten.index', compact('paten'));
    }
    public function hakCipta()
    {
        $hc = HakCipta::where('institusi', 'Umum')->get();
        return view('umum.hakcipta.index', compact('hc'));
    }
    public function desainIndustri()
    {
        $di = DesainIndustri::where('institusi', 'Umum')->get();
        return view('umum.desainindustri.index', compact('di'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
