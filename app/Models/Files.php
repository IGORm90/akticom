<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Files extends Model
{

    public function saveCSVFile($file){
        foreach($file as $f){
            $data = explode(';', $f);
            if(count($data) === 14){
                DB::table('csv_files')->insert([
                    'code' => $data[0],
                    'title' => $data[1],
                    'lvl1' => $data[2],
                    'lvl2' => $data[3],
                    'lvl3' => $data[4],
                    'price' => (float)$data[5],
                    'price_MP' => (float)$data[6],
                    'in_stock' => (int)$data[7],
                    'property_fields' => $data[8],
                    'mutual_purchases' => $data[9],
                    'measure' => $data[10],
                    'image' => $data[11],
                    'in_main_page' => (int)$data[12],
                    'description' => $data[13],
                ]);
            }
        }
    }

    public function getParsedData(){
        $data = DB::select('SELECT * FROM csv_files');
        return $data;
    }

    public function deleteData(){
        DB::table('csv_files')->truncate();
    }
}
