<?php

namespace App\Http\Controllers;

use App\Models\empat;
use Illuminate\Http\Request;

class DashboardEmpatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/empats/empat', [
            'posts' => Empat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.empats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_template_ibslite' => 'required',
            'deskripsi_template_ibslite' => 'required',
        ]);

        Empat::create($validatedData);

        return redirect('/dashboard/empat')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empat  $empat
     * @return \Illuminate\Http\Response
     */
    public function show(empat $empat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empat  $empat
     * @return \Illuminate\Http\Response
     */
    public function edit(empat $empat)
    {
        $post = Empat::find($empat);
        return view('dashboard.empats.edit', [
            'empat' => $empat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empat  $empat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empat $empat)
    {
        $rules = [
            'id_template_ibslite' => 'required',
            'deskripsi_template_ibslite' => 'required',
        ];


        $validatedData = $request->validate($rules);

        $validatedData = Empat::find($empat);
        $validatedData->each->update($request->all());



        return redirect('/dashboard/empat')->with('success', 'Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empat  $empat
     * @return \Illuminate\Http\Response
     */
    public function destroy(empat $empat)
    {
        $empats = Empat::find($empat);
        $empats->each->delete();

        return redirect('/dashboard/empat')->with('success', 'Berhasil Dihapus');
    }
}
