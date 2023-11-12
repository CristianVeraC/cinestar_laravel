<?php
namespace App\Http\Controllers;

use Illuminate\Request;
use Illuminate\Support\Facades\DB;

class CinestarController extends Controller
{

    public function index(){
        return view('index');

    }
    public function cines(){
        return view('cines');
        /*$cines = DB::select('call sp_getCines()');
        return view('cines', ['cines' => $cines]);*/
    }

    public function pelicula(){
        return view('pelicula');
    }

    public function peliculas(){
        return view('peliculas');
    }

    public function cine(){
        return view('cine');
    }
}
