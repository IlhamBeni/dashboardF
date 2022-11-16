<?php

namespace App\Http\Controllers;

use App\Models\satu;
use App\Models\post;
use App\Models\tiga;
use App\Models\empat;
use App\Models\lima;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function GuzzleHttp\Promise\each;

class DashboardSatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Satu::all();

        return view('dashboard/satus/satu', compact('posts'));
        // return view('dashboard/satus/satu', [
        //     'posts' => Satu::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $posts = Post::all();
        $tiga = Tiga::all();
        $empat = Empat::all();
        $lima = Lima::all();
        return view('dashboard.satus.create', compact('posts','tiga','empat','lima'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, satu $satu)
    {
        Satu::create($request->all());

        return redirect('/dashboard/satu')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function show(Satu $satu)
    {
        $posts = Satu::find($satu);

        // dd($posts);
        return view('dashboard.satus.show', [
            'posts' => $posts
        ]);
        // return $satu;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function edit(satu $satu)
    {
        $posts = Post::all();
        $tiga = Tiga::all();
        $empat = Empat::all();
        $lima = Lima::all();
        return view('dashboard.satus.edit', compact('posts','tiga','empat','lima'), [
            'satu' => $satu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, satu $satu)
    {
        $validatedData = Satu::find($satu);

        $validatedData->each->update($request->all());

        return redirect('/dashboard/satu')->with('success', 'Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function destroy(satu $satu)
    {
        $posts = Satu::find($satu);
        $posts->each->delete();

        return redirect('/dashboard/satu')->with('success', 'Berhasil Dihapus');
    }
}
