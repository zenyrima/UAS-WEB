<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tambah_dataController extends Controller
{
    public function index()
    {
        return view ('tambah_data.tambah_data');
    }

    public function create()
    {
        return "hallo saya create, dari mahasiswa controller";
    }

}
