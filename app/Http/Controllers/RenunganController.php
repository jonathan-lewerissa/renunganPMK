<?php

namespace App\Http\Controllers;

use App\Renungan;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class RenunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Renungan::orderBy('tanggal', 'asc')->paginate(10);
        return view('list',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Renungan();
        if($request->gambar->isValid()){
            $filename = time().'.'.$request->gambar->getClientOriginalExtension();
            $path = $request->gambar->move('img',$filename);
            $new->gambar = $path;
        }
        $new->tanggal = $request->tanggal;
        $new->ayat_emas = $request->ayat_emas;
        $new->judul = $request->judul;
        $new->ayat = $request->ayat;
        $new->isi = $request->isi;
        $new->sumber = $request->sumber;
        $new->save();
        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function show(Renungan $renungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Renungan::findorfail($id);
        return view('edit',compact('r'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $r = Renungan::findorfail($id);
        $r->tanggal = $request->tanggal;
        $r->ayat_emas = $request->ayat_emas;
        $r->judul = $request->judul;
        $r->ayat = $request->ayat;
        $r->isi = $request->isi;
        $r->sumber = $request->sumber;
        if($request->gambar->isValid()){
            $filename = time().'.'.request()->gambar->getClientOriginalExtension();
            $path = $request->file('gambar')->move('img',$filename);
            $r->gambar = $path;
        }
        $r->save();
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Renungan  $renungan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r = Renungan::findorfail($id);
        // File::delete($r->gambar);
        $r->delete();
        return back();
    }
}
