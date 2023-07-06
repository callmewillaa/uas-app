<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\subkriteria;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hitung(Request $request){

        $kriteria = kriteria::sum('bobot');

        $bobot1 = 5/$kriteria;
        $bobot2 = 5/$kriteria;
        $bobot3 = 5/$kriteria;
        $bobot4 = 3/$kriteria;
        $bobot5 = 2/$kriteria;
        $widget1 = [
            'kriterias' => $bobot1,
        ];
        $widget2 = [
            'kriterias' => $bobot2,
        ];
        $widget3 = [
            'kriterias' => $bobot3,
        ];
        $widget4 = [
            'kriterias' => $bobot4,
        ];
        $widget5 = [
            'kriterias' => $bobot5,
        ];


        $subkriteria = subkriteria::get();
        $data = subkriteria::orderby('nama', 'asc')->get();

        $minC1 = subkriteria::min('C1');
        $maxC1 = subkriteria::max('C1');
        $minC2 = subkriteria::min('C2');
        $maxC2 = subkriteria::max('C2');
        $minC3 = subkriteria::min('C3');
        $maxC3 = subkriteria::max('C3');
        $minC4 = subkriteria::min('C4');
        $maxC4 = subkriteria::max('C4');
        $minC5 = subkriteria::min('C5');
        $maxC5 = subkriteria::max('C5');

        $C1min =[
            'subkriterias' => $minC1,
        ];
        $C1max =[
            'subkriterias' => $maxC1,
        ];
        $C2min =[
            'subkriterias' => $minC2,
        ];
        $C2max =[
            'subkriterias' => $maxC2,
        ];
        $C3min =[
            'subkriterias' => $minC3,
        ];
        $C3max =[
            'subkriterias' => $maxC3,
        ];
        $C4min =[
            'subkriterias' => $minC4,
        ];
        $C4max =[
            'subkriterias' => $maxC4,
        ];
        $C5min =[
            'subkriterias' => $minC5,
        ];
        $C5max =[
            'subkriterias' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'subkriterias' => $hasil,
        ];

        return view('admin.spk.hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max'));
    }
}
