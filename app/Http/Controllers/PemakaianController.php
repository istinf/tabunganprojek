<?php

namespace App\Http\Controllers;

use App\Models\Pemakaian;
use Illuminate\Http\Request;

class PemakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemakaians = Pemakaian::latest()->paginate(5);
        return view('pemakaians.index',compact('pemakaiants'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemakaians.create');

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
            'jumlah_uang_masuk' => 'required',
            'uang_keluar' => 'required',
            'total_uang' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required',
        
            ]);
            Pemakaian::create($request->all());
            return redirect()->route('pemakaians.index')
            ->with('success','Pemakaian created successfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function show(Pemakaian $pemakaian)
    {
        return view('pemakaians.show',compact('pemakaian'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemakaian $pemakaian)
    {
        return view('pemakaians.edit',compact('pemakaian'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemakaian $pemakaian)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'jumlah_uang_masuk' => 'required',
            'uang_keluar' => 'required',
            'total_uang' => 'required',
            'keterangan' => 'required',
            'tanggal' => 'required',
            ]);
            $pemakaian->update($request->all());
            return redirect()->route('pemakaians.index')
            ->with('success','Pemakaian updated successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemakaian  $pemakaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemakaian $pemakaian)
    {
        $pemakaian->delete();
        return redirect()->route('pemakaians.index')
        ->with('success','Pemakaian deleted successfully');
        
    }
}
