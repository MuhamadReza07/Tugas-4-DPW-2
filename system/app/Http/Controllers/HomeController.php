<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
   
    
    function ShowBeranda(){
        return view('admin.beranda');
    }

    function ShowProduk(){
        return view('admin.produk');
    }

    function ShowKategori(){
        return view('admin.kategori');
    }

    function ShowPromo(){
        return view('admin.promo');
    }

}    