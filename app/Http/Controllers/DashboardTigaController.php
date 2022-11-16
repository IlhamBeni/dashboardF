<?php

namespace App\Http\Controllers;

use App\Models\tiga;
use Illuminate\Http\Request;

class DashboardTigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/tigas/tiga', [
            'posts' => Tiga::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tigas.create');
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
            'id_server_service' => 'required',
            'deskripsi_server' => 'required',
            'ip_address' => 'required',
        ]);

        Tiga::create($validatedData);

        return redirect('/dashboard/tiga')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tiga  $tiga
     * @return \Illuminate\Http\Response
     */
    public function show(tiga $tiga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tiga  $tiga
     * @return \Illuminate\Http\Response
     */
    public function edit(tiga $tiga)
    {
        $post = Tiga::find($tiga);
        return view('dashboard.tigas.edit', [
            'tiga' => $tiga
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tiga  $tiga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiga $tiga)
    {
        $rules = [
            'id_server_service' => 'required',
            'deskripsi_server' => 'required',
            'ip_address' => 'required',
        ];


        $validatedData = $request->validate($rules);

        $validatedData = Tiga::find($tiga);
        $validatedData->each->update($request->all());



        return redirect('/dashboard/tiga')->with('success', 'Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tiga  $tiga
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiga $tiga)
    {
        $tigas = Tiga::find($tiga);
        $tigas->each->delete();

        return redirect('/dashboard/tiga')->with('success', 'Berhasil Dihapus');
    }
}
