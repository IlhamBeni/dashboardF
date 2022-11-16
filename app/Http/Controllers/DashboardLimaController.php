<?php

namespace App\Http\Controllers;

use App\Models\lima;
use Illuminate\Http\Request;

class DashboardLimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/limas/lima', [
            'posts' => Lima::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.limas.create');
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
            'id_sc' => 'required',
            'deskripsi_sc' => 'required',
        ]);

        Lima::create($validatedData);

        return redirect('/dashboard/lima')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lima  $lima
     * @return \Illuminate\Http\Response
     */
    public function show(lima $lima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lima  $lima
     * @return \Illuminate\Http\Response
     */
    public function edit(lima $lima)
    {
        $post = Lima::find($lima);
        return view('dashboard.limas.edit', [
            'lima' => $lima
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lima  $lima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lima $lima)
    {
        $rules = [
            'id_sc' => 'required',
            'deskripsi_sc' => 'required',
        ];


        $validatedData = $request->validate($rules);

        $validatedData = Lima::find($lima);
        $validatedData->each->update($request->all());

        return redirect('/dashboard/lima')->with('success', 'Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lima  $lima
     * @return \Illuminate\Http\Response
     */
    public function destroy(lima $lima)
    {
        $limas = Lima::find($lima);
        $limas->each->delete();

        return redirect('/dashboard/lima')->with('success', 'Berhasil Dihapus');
    }
}
