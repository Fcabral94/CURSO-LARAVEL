<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     for($i=0 ; $i<=20; $i++){
         DB::table("frutas")->insert(array(
             "nombre" => "cereza". $i,
             "descripcion" =>"Descripcion de la fruta".$i,
             "precio" =>$i,
             "fecha" => date("Y-m-d")
         ));
    }
}
}
