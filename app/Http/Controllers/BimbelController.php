<?php

namespace App\Http\Controllers;

use App\Bimbel;
use App\Paket;
use App\UserBimbel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BimbelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:bimbel');
    }

    public function index()
    {
        //$bimbel = Bimbel::where('id_userbimbel',Auth::user()->id)->get();
        return view('pages.bimbel.bimbel.bimbel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $filename = time() . '.' . $foto->getClientOriginalExtension();
        $path = public_path('/uploads/bimbel');
        $foto->move($path, $filename);

        $bimbel = Auth::user();
        $bimbel->filename = $filename;
        $bimbel->judul = $request->judul;
        $bimbel->deskripsi = $request->deskripsi;
        $bimbel->alamat = $request->alamat;
        $bimbel->nohp = $request->nohp;
        $bimbel->jenjang = $request->jenjang;
        $bimbel->save();

        return redirect()->route('bimbel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bimbel $bimbel
     * @return \Illuminate\Http\Response
     */
    public function show(Bimbel $bimbel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bimbel $bimbel
     * @return \Illuminate\Http\Response
     */
    public function edit(Bimbel $bimbel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Bimbel $bimbel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bimbel $bimbel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bimbel $bimbel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bimbel $bimbel)
    {
        //
    }

    public function paket()
    {
        $paket = Paket::where('id_userbimbel', Auth::user()->id)->where('deleted_at', '1')->get();
        return view('pages.bimbel.paket.paket', compact('paket'));
    }

    public function paketcreate()
    {
        return view('pages.bimbel.paket.create');
    }

    public function paketstore(Request $request)
    {
        $paket = new Paket();
        $paket->id_userbimbel = Auth::user()->id;
        $paket->paket = $request->paket;
        $paket->harga = $request->harga;
        //dd($request->all());
        $paket->save();

        return redirect()->route('paket')->with('create', 'berhasil menambahkan paket');
    }

    public function paketedit($id)
    {
        $paket = Paket::find($id);
        return view('pages.bimbel.paket.edit', compact('paket'));
    }

    public function paketupdate(Request $request, $id)
    {
        $paket = Paket::find($id);
        $paket->id_userbimbel = Auth::user()->id;
        $paket->paket = $request->paket;
        $paket->harga = $request->harga;
        $paket->update();

        return redirect()->route('paket')->with('update', 'berhasil mengupdate paket');
    }

    public function paketdestroy($id)
    {
        $paket = Paket::find($id);
        $paket->update(['deleted_at' => '0']);

        return redirect()->route('paket')->with('delete', 'berhasil menghapus paket');
    }

}
