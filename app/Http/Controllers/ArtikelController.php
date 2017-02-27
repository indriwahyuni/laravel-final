<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('id', 'DESC')->paginate(14);
        return view ('artikel.index')->with('artikel', $artikel);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('artikel.add');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //memvalidasi data yang mau di store
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $tambah = new Artikel();
        $tambah->judul_artikel = $request['judul'];
        $tambah->isi_artikel = $request['isi'];
        $tambah->save();

        //mengembalikan ke halaman view index artikel
        return redirect()->to('/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::find($id);
        return view ('artikel.tampil')->with('artikel',$artikel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $update = Artikel::where('id',$id)->first();
        $update->judul_artikel = $request['judul'];
        $update->isi_artikel = $request['isi'];
        $update->update();
        
        return redirect()->to('/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $destroy = Artikel::find($id);
        $destroy->delete();
        
        return redirect()->to('/artikel');
    }
}
