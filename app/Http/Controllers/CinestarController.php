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
        $cines = DB::select('call sp_getCines()');
        return view('cines', compact('cines'));
    }


    public function cine($id){
        $cine1 = DB::select('call sp_getCine(?)',[$id]);
        $cine2 = DB::select('call sp_getCineTarifas(?)',[$id]);
        $cine1 = DB::select('call sp_getCinepeliculas(?)',[$id]);
        return view('cine',compact('cine1','cine2','cine3'));
    }

    public function peliculas($id){
        $peliculas = DB::select('call sp_getPeliculas(?)',[$id =1]);
        return view('peliculas', compact('peliculas'));
    }

    public function pelicula($id){
        $pelicula =DB::select('call sp_getPelicula(?)',[$id]);
        return view('pelicula', compact('pelicula'));
    }

}
