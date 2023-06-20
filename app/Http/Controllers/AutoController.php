<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class AutoController extends Controller
{
   
    public function APIinsertoauto(Request $request)
    {
                 
        $autos = new Auto();        
        $autos->marca = $request->input('marca');
        $autos->modelo = $request->input('modelo');
        $autos->color = $request->input('color');
        $autos->puertas = $request->input('puertas');
        $autos->cilindrado = $request->input('cilindrado');
        $autos->automatico = $request->input('automatico');
        $autos->electrico = $request->input('electrico');
        $autos->save();

      }



    public function APIlistarauto(Request $request){          

        $autos = Auto::all();
        return response()->json($autos);
        }
            

 
      
}
