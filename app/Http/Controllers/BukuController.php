<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class BukuController extends Controller
{
    public function index(){
        $data = buku::all();
        return view ('perpustakaan',compact('data'));
    }

    public function tambahdata(){
        return view('tambah');
    }

    public function insertdata(Request $request){
        buku::create($request -> all());

    }

}
