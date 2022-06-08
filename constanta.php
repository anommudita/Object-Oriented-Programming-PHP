<?php

// menggunakan keyword define harus huruf besar
define('NAMA', 'Anom Ganteng');
echo NAMA;
echo "<hr>";


// menggunakan keyword const harus hurud besar
const UMUR = 19;
echo UMUR;

// Tester
class Coba
{
    const NAMA = "Anom Mudita";
}

// cara mengaksesnya sama sepeti keyword static tidak perlu diInstansisasi Object.
echo Coba::NAMA;


//Menggunakan Magic Const yang ada diPHP
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<hr>";




function IniFunction()
{
    return __FUNCTION__;
}

echo IniFunction();

echo "<hr>";

class IniClass
{

    public $halo = __CLASS__;
}


$obj = new IniClass;
echo $obj->halo;
