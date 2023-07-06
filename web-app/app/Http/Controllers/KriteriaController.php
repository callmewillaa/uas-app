<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = kriteria::orderby('kode', 'asc')->get();
        return view('admin.kriteria.index', compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required',
        ]);

        $kriteria = Kriteria::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'bobot' => $request->bobot,
        ]);

        return redirect()->to('kriteria')->with('success','Data Berhasil Disimpan');
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
        $kriteria = kriteria::findorfail($id);
        return view('admin.kriteria.edit', compact('kriteria'));
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
        $this->validate($request, [
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required',
        ]);

        $kriteria = [
            'kode' => $request->kode,
            'nama' => $request->nama,
            'bobot' => $request->bobot,
        ];

        kriteria::whereId($id)->update($kriteria);

        return redirect()->route('kriteria.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriteria = kriteria::findorfail($id);
        $kriteria->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
