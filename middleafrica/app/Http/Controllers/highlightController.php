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


        if($req->hasFile('icono','icono2','icono3','icono4','icono5','icono6')){

          $iconos=highlight::find($id);

          Storage::delete("public/upload/". $iconos->icono);
          Storage::delete("public/upload/". $iconos->icono2);
          Storage::delete("public/upload/". $iconos->icono3);
          Storage::delete("public/upload/". $iconos->icono4);
          Storage::delete("public/upload/". $iconos->icono5);
          Storage::delete("public/upload/". $iconos->icono6);

          $iconoViejo["icono"]=$req->file("icono")->store("upload","public");
          $iconoViejo["icono2"]=$req->file("icono2")->store("upload","public");
          $iconoViejo["icono3"]=$req->file("icono3")->store("upload","public");
          $iconoViejo["icono4"]=$req->file("icono4")->store("upload","public");
          $iconoViejo["icono5"]=$req->file("icono5")->store("upload","public");
          $iconoViejo["icono6"]=$req->file("icono6")->store("upload","public");


          $nombreIcono=basename($iconoViejo["icono"]);
          $nombreIcono2=basename($iconoViejo["icono2"]);
          $nombreIcono3=basename($iconoViejo["icono3"]);
          $nombreIcono4=basename($iconoViejo["icono4"]);
          $nombreIcono5=basename($iconoViejo["icono5"]);
          $nombreIcono6=basename($iconoViejo["icono6"]);


          $iconoViejo["icono"]=$nombreIcono;
          $iconoViejo["icono2"]=$nombreIcono2;
          $iconoViejo["icono3"]=$nombreIcono3;
          $iconoViejo["icono4"]=$nombreIcono4;
          $iconoViejo["icono5"]=$nombreIcono5;
          $iconoViejo["icono6"]=$nombreIcono6;
            

          $iconoEditado=highlight::where('id','=',$id)->update($iconoViejo);

           return redirect("/highlights");
            
        }
    
    }
}