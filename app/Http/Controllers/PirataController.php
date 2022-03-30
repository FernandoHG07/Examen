<?php

namespace App\Http\Controllers;
use App\Models\Pirata;
use App\Http\Controllers\apisController;

use Illuminate\Http\Request;

class PirataController extends Controller
{
    /**
     * @return view
     * 
     */
    public function index(){
        $piratas = Pirata::all();
        return view('piratas',['piratas'=>$piratas]) ;
    }

    public function pirata(){
        $piratas = Pirata::all();

        $datos = new apisController();
        $llamar = $datos->pirate();

        return view('pirata',['piratas'=>$piratas, 'llamar'=>$llamar]);
    }


}