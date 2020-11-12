<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lugaresturisticos extends Model
{
    public $table ="lugaresturisticos";
    public $timestamps = false;
    public $guarded = [];

    public function pais(){
        return $this->belongsTo("App\Pais","paises_id");
    }

}