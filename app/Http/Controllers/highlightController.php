<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\highlight;

class highlightController extends Controller
{
    public function listado(){
        $iconos=highlight::all();

        $vac=compact("iconos");

        return view("/highlights",$vac);
    }

    public function editariconos($id){

        $iconos=highlight::find($id);

        $vac=compact("iconos");

        return view("/cargarIconos",$vac);
      }

      public function cargarIconos(request $req,$id){
        
      
        $iconoViejo=request()->except('_token');


        if($req->hasFile('icono')){

          $iconos=highlight::find($id);

          Storage::delete("public/upload/". $iconos->icono);

          $iconoViejo["icono"]=$req->file("icono")->store("upload","public");

          $nombreIcono=basename($iconoViejo["icono"]);

          $iconoViejo["icono"]=$nombreIcono;
            

          $iconoEditado=highlight::where('id','=',$id)->update($iconoViejo);

           return redirect("/highlights");
            
        }
    
    }
}