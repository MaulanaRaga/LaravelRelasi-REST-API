<?php

namespace App\Http\Controllers;
use App\datapelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\datamobils;

class DatapelangganController extends Controller
{
    public function join()
    {
        $join=DB::table('datamobils')->join('datapelanggan','datamobils.id_pinjam','=','datapelanggan.id_pinjam')->get();
        return view('datapeminjaman.Data-peminjaman',compact('join'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdatapelanggan = datapelanggan::all();
        return view('datapelanggan.Data-pelanggan',compact('dtdatapelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datapelanggan.create-pelanggan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        datapelanggan::create([
            'no_ktp' => $request->no_ktp,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'nama_pelanggan' => $request->nama_pelanggan,
            'id_pinjam' => $request->id_pinjam,
            'jml_pinjam' => $request->jml_pinjam,
        ]);
        return redirect('Data-pelanggan')->with('toast_success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPeminjaman()
    {
        $join=DB::table('datamobils')->join('datapelanggan','datamobils.id_pinjam','=','datapelanggan.id_pinjam')->get();
        return response()->json(['datapelanggan' => $join]);
    }

    public function showPelanggan()
    {
      return response()->json(datapelanggan::get(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pel = datapelanggan::where('no_ktp',$id)->first();
        return view('datapelanggan.edit-pelanggan',compact('pel'));
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
        $validatedData = $request->validate([
            'alamat' => ['required'],
            'tanggal_lahir' => ['required'],
            'no_telp' => ['required'],
            'nama_pelanggan' => ['required'],
            'id_pinjam' => ['required'],
            'jml_pinjam' => ['required'],
        ]);

        datapelanggan::where('no_ktp',$id)->update([
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telp' => $request->no_telp,
            'nama_pelanggan' => $request->nama_pelanggan,
            'id_pinjam' => $request->id_pinjam,
            'jml_pinjam' => $request->jml_pinjam,
        ]);
        return redirect('Data-pelanggan')->with('toast_success', 'Task Created Successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pel = datapelanggan::where('no_ktp',$id);
        $pel->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
