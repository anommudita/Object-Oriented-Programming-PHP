<?php

class Buah
{

    private $warna;

    public function makan()
    {
        //kunyahh

        // nyam.. nyamm . nyamm
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
}


// inheritance dari buah
class Apel extends Buah
{

    public function makan()
    {

        //kunyah
        // sampai bagian tengah

    }
}


// inheritance dari buah
class jeruk extends Buah
{

    public function makan()
    {

        //kupas dulu njing sebelum makannya;
        // kunyah

    }
}




// Ini Contoh Abstract

abstract class Sayur // class abstract
{

    private $bentuk;

    // method abstract
    // hanya interfacenya saja 
    //implementasinya hanya saja diclass turunannya.
    abstract public function dimakan();

    public function setWarna($bentuk)
    {

        $this->bentuk = $bentuk;
    }
}