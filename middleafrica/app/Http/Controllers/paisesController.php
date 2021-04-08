<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Pais;

class paisesController extends Controller
{
    public function listadoPaises(){
      $paises=Pais::all();

      $vac=compact("paises");

      return view("/paises",$vac);
    }

    public function angola(){

      $paises = Pais::where("id",1)->get();

      $vac = compact("paises");

      return view("/angola",$vac);
    }

    public function cameroon(){

      $paises = Pais::where("id",2)->get();

    

      $vac = compact("paises");

      return view("/cameroon",$vac);
    }

    public function CentralAfricanRepublic(){

      $paises = Pais::where("id",3)->get();

      $vac = compact("paises");

      return view("/central_african_republic",$vac);
    }

    public function chad(){
      $paises = Pais::where("id",4)->get();

      $vac = compact("paises");

      return view("/chad",$vac);
    }

    public function DemocraticRepublicCongo(){
      $paises = Pais::where("id",5)->get();

      $vac = compact("paises");

      return view ("/democratic_Republic_of_congo",$vac);
    }

    public function RepublicCongo(){
      $paises = Pais::where("id",8)->get();

      $vac = compact("paises");

      return view ("/republic_of_congo",$vac);
    }




    public function gabon(){
      $paises = Pais::where("id",7)->get();

      $vac = compact("paises");

      return view ("/gabon",$vac);
    }

    public function equatorialGuinea(){
      $paises = Pais::where("id",6)->get();

      $vac = compact("paises");

      return view ("/equatorial_Guinea",$vac);
    }


    public function Nigeria(){
      $paises = Pais::where("id",10)->get();

      $vac = compact("paises");

      return view ("/nigeria",$vac);
    }

    public function saoTome(){
      $paises = Pais::where("id",9)->get();

      $vac = compact("paises");

      return view ("/sao_Tome",$vac);
    }

    public function southSudan(){
      $paises = Pais::where("id",12)->get();

      $vac = compact("paises");

      return view ("/south_Sudan",$vac);
    }

   public function principe(){
     $paises = Pais::where("id",11)->get();

     $vac = compact("paises");

     return view("/principe", $vac);
   }

   public function index (){
    return view ('index');
  }


    public function contacto(Request $req){
      $data =["company" => $req["company"],
                "fullname"=>$req["fullname"],
                "phone" => $req["phone"],
                "email" =>$req["email"],
                "messages"=>$req["mensaje"],
    ];

        
        Mail::send('/contacto',$data, function($msj) use($data){
            $msj->from("info@middleafrica.com","middleafrica");
            $msj->subject("contacto Middle Africa");
            $msj->to("nicostecher1@gmail.com");
        });
        return redirect()->back();
    }

}




