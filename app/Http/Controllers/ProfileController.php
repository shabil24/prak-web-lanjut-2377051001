<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "") 
{ 
    $data = [ 
        'nama' => $nama, 
        'kelas' => $kelas, 
        'npm' => $npm, 
        ];

        return view ('profile', $data); 
}
}

