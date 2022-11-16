<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class DashboardDuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/duas/dua', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.duas.create');
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
            'id_ref_produk' => 'required',
            'deskripsi_ref_produk' => 'required',
        ]);

        Post::create($validatedData);

        return redirect('/dashboard/dua')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard.duas.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'id_ref_produk' => 'required',
            'deskripsi_ref_produk' => 'required',
        ];


        $validatedData = $request->validate($rules);

        $validatedData = Post::find($id);
        $validatedData->update($request->all());



        return redirect('/dashboard/dua')->with('success', 'Berhasil Diedit');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $posts = Post::find($post);
        $posts->delete();

        return redirect('/dashboard/dua')->with('success', 'Berhasil Dihapus');

    }
}
