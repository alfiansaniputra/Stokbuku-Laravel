<?php

namespace App\Http\Controllers;
use App\Buku;
use App\Penerbit;
use App\Stokbuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $buku = Buku::all();
         return view('buku.index',['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
        return redirect('buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'nama_buku' => 'required', 'harga_jual' => 'required', 'harga_dasar' => 'required', 'penerbit_id' => 'required', 
        ]);
        
        $buku = new Buku;
        $buku->nama_buku        = $request->nama_buku;
        $buku->harga_jual        = $request->harga_jual;
        $buku->harga_dasar        = $request->harga_dasar;
        $buku->penerbit_id     = $request->penerbit_id;
        $buku->slug         = str_slug($request->nama_buku, '-');
        $buku->save();

        return redirect('list-buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku= Buku::where('slug', $id)->first();
        if ($buku == null) {
           abort(404);
        }
        return view('buku.detail')->with('buku',$buku);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku= Buku::where('slug', $id)->first();
        if(!$buku){
            abort(404);
        }
        
        return view('buku.edit')->with('buku', $buku);
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
        $this->validate($request, [
           'nama_buku' => 'required', 'harga_jual' => 'required', 'harga_dasar' => 'required', 'penerbit_id' => 'required', 
        ]);

        $buku= Buku::where('slug', $id)->first();
        $buku->nama_buku        = $request->nama_buku;
        $buku->harga_jual        = $request->harga_jual;
        $buku->harga_dasar        = $request->harga_dasar;
        $buku->penerbit_id     = $request->penerbit_id;
        $buku->slug         = str_slug($request->nama_buku, '-');

        $buku->save();
        return redirect('buku');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku ->delete();
        return redirect('buku');
    }
}
