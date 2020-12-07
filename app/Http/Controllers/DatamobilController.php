<?php

namespace App\Http\Controllers;
use App\datamobil;
use Illuminate\Http\Request;

class DatamobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtdatamobil = datamobil::all();
        return view('datamobil.Data-mobil',compact('dtdatamobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('datamobil.create-mobil');
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
        datamobil::create([
            'merek' => $request->merek,
            'model' => $request->model,
            'tahun_buat' => $request->tahun_buat,
            'stock' => $request->stock,
        ]);
        return redirect('Data-mobil')->with('toast_success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return response()->json(datamobil::get(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mob = datamobil::where('id_pinjam',$id)->first();
        return view('datamobil.edit-mobil',compact('mob'));
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
            'merek' => ['required'],
            'model' => ['required'],
            'tahun_buat' => ['required'],
            'stock' => ['required'],
        ]);

        datamobil::where('id_pinjam',$id)->update([
            'merek' => $request->merek,
            'model' => $request->model,
            'tahun_buat' => $request->tahun_buat,
            'stock' => $request->stock,
        ]);
        return redirect('Data-mobil')->with('toast_success', 'Task Created Successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mob = datamobil::where('id_pinjam',$id);
        $mob->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
