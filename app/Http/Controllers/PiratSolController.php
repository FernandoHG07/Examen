<?php

namespace App\Http\Controllers;
use App\Models\Pirata;

use Illuminate\Http\Request;

class PiratSolController extends Controller
{
    /**
     * @return view
     * 
     */
    public function pirata(){
        $piratas = Pirata::all();
        return view('pirata',['piratas'=>$piratas]) ;
    }
}
