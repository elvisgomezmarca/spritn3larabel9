<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    function upload(Request $req){
        //$nombre = Arr::pluck($req,'nombreArchivo');
        //$result = $req->file('file')->store('Archivos');
        $result = $req->file('file')->storeAs('Archivos','imagen.png');
        return ["result"=>$result];
    }
    function upDate($nombre){
        if(storage::file('file')->exists('imagen.png')){
            storage::file('file')->move('imagen..png',$nombre);
        }

    }
    function download(Request $req){
        $path = storage_path('app\Archivos\ ');
        return response()->download($path);
    }
}
