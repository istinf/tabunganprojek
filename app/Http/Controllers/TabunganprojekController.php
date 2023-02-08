<?php

namespace App\Http\Controllers;

use App\Models\Tabunganprojek;
use Illuminate\Http\Request;

class TabunganprojekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabunganprojeks = Tabunganprojek::latest()->paginate(5);
        return view('tabunganprojeks.index',compact('tabunganprojeks'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabunganprojeks.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'tahun_ajaran' => 'required',
            'jenis_kelamin' => 'required',
            'jumlah_nominal_tabungan' => 'required',
            ]);

        Tabunganprojek::create($request->all());
        return redirect()->route('tabunganprojeks.index')
        ->with('success','Tabunganprojek created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabunganprojek  $tabunganprojek
     * @return \Illuminate\Http\Response
     */
    public function show(Tabunganprojek $tabunganprojek)
    {
        return view('tabunganprojeks.show',compact('tabunganprojekt'));
    } 


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabunganprojek  $tabunganprojek
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabunganprojek $tabunganprojek)
    {
        return view('tabunganprojeks.edit',compact('tabunganprojek'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tabunganprojek  $tabunganprojek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabunganprojek $tabunganprojek)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'tahun_ajaran' => 'required',
            'jenis_kelamin' => 'required',
            'jumlah_nominal_tabungan' => 'required',
            ]);
            $product->update($request->all());
            return redirect()->route('tabunganprojeks.index')
            ->with('success','Tabunganprojek updated successfully');
    }
            

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabunganprojek  $tabunganprojek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabunganprojek $tabunganprojek)
    {
        $tabunganprojek->delete();
        return redirect()->route('tabunganprojeks.index')
        ->with('success','Tabunganprojek deleted successfully');
    }
    

}