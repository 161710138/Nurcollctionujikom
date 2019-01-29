<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MitraKerja;
use File;
use Alert;
class MitraKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitrakerja =MitraKerja::all();
        return view('mitrakerja.index',compact('mitrakerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mitrakerja = MitraKerja::all();
        return view('mitrakerja.create',compact('mitrakerja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Alert::success('Data Successfully Saved','Good Job!')->autoclose(1700);

        $this->validate($request,[
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'slug' => '',
           
        ]);

        $mitrakerja = new MitraKerja;
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/mitrakerja/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $mitrakerja->gambar = $filename;
        }    
            $mitrakerja->slug =str_slug($request->nama_barang,'-');
            $mitrakerja->save();
        return redirect()->route('mitrakerja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mitrakerja = MitraKerja::findOrFail($id);
        return view('mitrakerja.edit',compact('mitrakerja'));
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
            Alert::success('Data Successfully Changed','Good Job!')->autoclose(1700);

        $this->validate($request,[
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'slug' => '',
            
        ]);

        $mitrakerja = mitrakerja::findOrFail($id);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path(). '/assets/img/mitrakerja/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

        if ($mitrakerja->gambar) {
        $old_gambar = $mitrakerja->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/mitrakerja'
        . DIRECTORY_SEPARATOR . $mitrakerja->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $mitrakerja->gambar = $filename;
        }
            $mitrakerja->slug =str_slug($request->nama_barang,'-');
            $mitrakerja->save();
        return redirect()->route('mitrakerja.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Alert::success('Data Successfully Deleted','Good Job!')->autoclose(1700);
        
        $mitrakerja = MitraKerja::findOrFail($id);
        $mitrakerja->delete();
        return redirect()->route('mitrakerja.index');
    }
}