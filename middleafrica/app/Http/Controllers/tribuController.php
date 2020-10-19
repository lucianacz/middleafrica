<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\tribu;

class tribuController extends Controller
{
    public function listadoTribus(){
        $tribus=tribu::all();
  
        $vac=compact("tribus");
  
        return view("/tribus",$vac);
      }

      public function editarTribu($id){
        $tribus=tribu::find($id);

        $vac=compact("tribus");

        return view("/cargarFotosTribu",$vac);
      }


      public function cargarFotos(request $req,$id){
        
          $tribuVieja=request()->except("_token");


          if($req->hasFile("foto1","foto2","foto3")){

            $tribus=tribu::find($id);

            
            Storage::delete("public/upload/".$tribus->foto1);

            Storage::delete("public/upload/".$tribus->foto2);

            Storage::delete("public/upload/".$tribus->foto3);

            
            $tribuVieja["foto1"]=$req->file("foto1")->store("upload","public");
              
            $tribuVieja["foto2"]=$req->file("foto2")->store("upload","public" );
              
            $tribuVieja["foto3"]=$req->file("foto3")->store("upload","public");

            $nombreFoto1=basename($tribuVieja["foto1"]);

            $nombreFoto2=basename($tribuVieja["foto2"]);
  
            $nombreFoto3=basename($tribuVieja["foto3"]);
  
  
            $tribuVieja["foto1"]=$nombreFoto1;
  
            $tribuVieja["foto2"]=$nombreFoto2;
  
            $tribuVieja["foto3"]=$nombreFoto3;

            $tribuEditada=tribu::where('id','=',$id)->update($tribuVieja);

            return redirect("/tribus");
          
          }
          

    }

}

  

