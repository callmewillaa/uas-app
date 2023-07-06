<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteria;
use App\Models\subkriteria;

class SubKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = kriteria::orderby('id', 'asc')->get();
        $subkriteria = subkriteria::orderby('created_at', 'asc')->get();
        return view('admin.subkriteria.index', compact('kriteria','subkriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subkriteria.create');
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
            'nama' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
        ]);

        $subkriteria = subkriteria::create([
            'nama' => $request->nama,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5,
        ]);

        return redirect()->to('subkriteria')->with('success','Data Berhasil Disimpan');
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
        $subkriteria = subkriteria::findorfail($id);
        return view('admin.subkriteria.edit', compact('subkriteria'));
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
            'nama' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
        ]);

        $subkriteria = [
            'nama' => $request->nama,
            'C1' => $request->C1,
            'C2' => $request->C2,
            'C3' => $request->C3,
            'C4' => $request->C4,
            'C5' => $request->C5,
        ];

        subkriteria::whereId($id)->update($subkriteria);

        return redirect()->route('subkriteria.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subkriteria = subkriteria::findorfail($id);
        $subkriteria->delete();

        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
