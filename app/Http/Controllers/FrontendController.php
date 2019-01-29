<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeris;
use App\Barangs;
use App\Artikels;
use App\MitraKerja;

class FrontendController extends Controller
{
    

    public function front()
    {
        $front = Galeris::all();
        $barangs = Barangs::all();
    	return view('layouts.front', compact('front','barangs'));
    }
    
    public function blog()
    {
    	$blog = Artikels::all();
    	return view('frontend.blog', compact('blog'));
    }
    
    
      public function singleblog ($id)
    {
        $singleblog = Artikels::findOrFail($id);
        return view('frontend.singleblog', compact('singleblog'));
    }

    public function produk()
    {
    	$produk = Barangs::all();
    	return view('frontend.produk', compact('produk'));
    }

    public function about ()
    {
        $about = Galeris::all();
        return view('frontend.about', compact('about'));
    }

    
    public function detailproduk ($id)
    {
        $detailproduk = Barangs::findOrFail($id);
        return view('frontend.detailproduk', compact('detailproduk'));
    }
    
     
    public function kontak ()
    {
        $kontak = Barangs::all();
        return view('frontend.kontak', compact('kontak'));
    }
    
    
    public function filter_barang ()
    {
        $kategorib = Barangs::where('kategori_id','=',$id)->get();
    	return view('layouts.produk', compact('kategorib'));
    }

      public function detailpro ($id)
    {
        $detailpro = Barangs::findOrFail($id);
        return view('frontend.detailpro', compact('detailpro'));
    }

      public function galeri ()
    {
        $galeri = Galeris::all();
        return view('frontend.galeri', compact('galeri'));
    }
    

      public function mitrakerja ()
    {
        $mitrakerja = MitraKerja::all();
        return view('frontend.mitrakerja', compact('mitrakerja'));
    }
    
    
    
}