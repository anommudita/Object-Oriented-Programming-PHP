<?php


class ContohStatic
{

    public static $angka = 1;

    public static function halo()
    {
        return "Anom Ganteng " . self::$angka++ . " kali.";
    }
}

// cara manggil keyword Static tanpa meninstansiasi objectnya
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";



// contoh keyword static, tidak diset dari ulang lagi cuma dilanjutkan lagi. 

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "halo " . self::$angka++ . " Kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();