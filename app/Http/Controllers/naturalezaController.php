<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\naturaleza;

class naturalezaController extends Controller
{
    public function listadoNaturaleza(){
        $naturaleza=naturaleza::all();
        $vac=compact("naturaleza");

        return view("/naturaleza",$vac);
    }

    public function editarNaturaleza($id){

        $naturalezas=naturaleza::find($id);

        $vac=compact("naturalezas");

        return view("/cargarFotosNaturaleza",$vac);
      }

      public function cargarFotosNaturaleza(request $req,$id){
        
      
        $naturalezaVieja=request()->except('_token');


        if($req->hasFile('foto1','foto2',"foto3")){
          
          $naturaleza=naturaleza::find($id);

          Storage::delete("public/upload/".$naturaleza->foto1);

          Storage::delete("public/upload/".$naturaleza->foto2);

          Storage::delete("public/upload/".$naturaleza->foto3);

          
          
          $naturalezaVieja["foto1"]=$req->file("foto1")->store("upload","public");
          
          $naturalezaVieja["foto2"]=$req->file("foto2")->store("upload","public" );

          $naturalezaVieja["foto3"]=$req->file("foto3")->store("upload","public");


          $nombreFoto1=basename($naturalezaVieja["foto1"]);

          $nombreFoto2=basename($naturalezaVieja["foto2"]);

          $nombreFoto3=basename($naturalezaVieja["foto3"]);


          $naturalezaVieja["foto1"]=$nombreFoto1;

          $naturalezaVieja["foto2"]=$nombreFoto2;

          $naturalezaVieja["foto3"]=$nombreFoto3;



          $naturalezaEditada=naturaleza::where('id','=',$id)->update($naturalezaVieja);

          return redirect("/naturaleza");
      }
    }
      
}