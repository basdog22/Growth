<?php



function iseed(){
    $tables = \Illuminate\Support\Facades\DB::select('SHOW TABLES');
    $tables = json_decode(json_encode($tables),1);
    foreach($tables as $table){
        foreach ($table as $k=>$value){
            \Iseed::generateSeed($value);
        }
    }
}