<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungans = Tabungan::latest()->paginate(5);
        return view('tabungans.index',compact('tabungans'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('tabungans.create');
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
            'nama' => 'required',
            'nis' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'uang_masuk' => 'required',
            'total_uang' => 'required',
            'tanggal' => 'required',
            ]);
            Tabungan::create($request->all());
            return redirect()->route('tabungans.index')
            ->with('success','Tabungan created successfully.');
            }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function show(Tabungan $tabungan)
    {
        return view('tabungans.show',compact('tabungan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabungan $tabungan)
    {
        return view('tabungans.edit',compact('tabungan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabungan $tabungan)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'uang_masuk' => 'required',
            'total_uang' => 'required',
            'tanggal' => 'required',
            ]);
            $tabungan->update($request->all());
            return redirect()->route('tabungans.index')
            ->with('success','Tabungan updated successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabungan $tabungan)
    {
        $tabungan->delete();
        return redirect()->route('tabungans.index')
        ->with('success','Tabungan deleted successfully');
        
    }
}