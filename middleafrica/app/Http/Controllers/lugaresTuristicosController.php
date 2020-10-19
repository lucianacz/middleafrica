<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\lugaresturisticos;

class lugaresTuristicosController extends Controller
{
    public function listadoLugaresTuristicos(){
        $lugares=lugaresturisticos::all();
            $vac=compact("lugares");

            return view ("/lugaresTuristicos",$vac);
        
    }

    public function editarLugaresTuristicos($id){

        $lugares=lugaresturisticos::find($id);

        $vac=compact("lugares");

        return view("/cargarFotosLugaresTuristicos",$vac);
      }

      public function cargarFotosLugaresTuristicos(request $req,$id){
        
      
        $lugarViejo=request()->except('_token');


        if($req->hasFile('foto1','foto2',"foto3","foto4")){

          $lugares=lugaresturisticos::find($id);

          Storage::delete("public/upload/".$lugares->foto1);

          Storage::delete("public/upload/".$lugares->foto2);

          Storage::delete("public/upload/".$lugares->foto3);

          Storage::delete("public/upload/".$lugares->foto4);


          $lugarViejo["foto1"]=$req->file("foto1")->store("upload","public");

          $lugarViejo["foto2"]=$req->file("foto2")->store("upload","public" );

          $lugarViejo["foto3"]=$req->file("foto3")->store("upload","public");

          $lugarViejo["foto4"]=$req->file("foto4")->store("upload","public");


          $nombreFoto1=basename($lugarViejo["foto1"]);

          $nombreFoto2=basename($lugarViejo["foto2"]);

          $nombreFoto3=basename($lugarViejo["foto3"]);

          $nombreFoto4=basename($lugarViejo["foto4"]);

          $lugarViejo["foto1"]=$nombreFoto1;

          $lugarViejo["foto2"]=$nombreFoto2;

          $lugarViejo["foto3"]=$nombreFoto3;

          $lugarViejo["foto4"]=$nombreFoto4;
        

             $hlugarEditado=lugaresTuristicos::where('id','=',$id)->update($lugarViejo);

            return redirect("/lugaresTuristicos");
            
        }
      }

}