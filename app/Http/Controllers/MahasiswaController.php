<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class MahasiswaController extends Controller
{
    public function search(Request $request){
        $id = $request['ID'];
        $mahasiswa = Mahasiswa::where('ID', $id)->first();

        if($mahasiswa == null){
            return view('/error');
        }
        
        return view('/result', compact('mahasiswa'));
    }
}
