<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\festivales;

class festivalesController extends Controller
{
    public function listadoFestivales(){
        $festivales=festivales::all();

        
            $vac=compact("festivales");
  
            return view ("/Festivales",$vac);
        
    }

    public function editarFestivales($id){

        $festival=festivales::find($id);

        $vac=compact("festival");

        return view("/cargarFotosfestivales",$vac);
      }

      public function cargarFotosFestival(request $req,$id){
        
      
        $festivalViejo=request()->except('_token');


        if($req->hasFile('foto1','foto2',"foto3")){

          $festivales=festivales::find($id);

          Storage::delete("public/upload/".$festivales->foto1);

          Storage::delete("public/upload/".$festivales->foto2);

          Storage::delete("public/upload/".$festivales->foto3);

          $festivalViejo["foto1"]=$req->file("foto1")->store("upload","public");

          $festivalViejo["foto2"]=$req->file("foto2")->store("upload","public");

          $festivalViejo["foto3"]=$req->file("foto3")->store("upload","public");

          $nombreFoto1=basename($festivalViejo["foto1"]);

          $nombreFoto2=basename($festivalViejo["foto2"]);

          $nombreFoto3=basename($festivalViejo["foto3"]);

          $festivalViejo["foto1"]=$nombreFoto1;

          $festivalViejo["foto2"]=$nombreFoto2;

          $festivalViejo["foto3"]=$nombreFoto3;

        }
             $festivalesEditados=festivales::where('id','=',$id)->update($festivalViejo);

            return redirect("/festivales");
    
          }
}
  

