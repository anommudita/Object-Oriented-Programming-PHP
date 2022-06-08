<?php

use Produk as GlobalProduk;

class Produk
{
    /// Property / data variable
    public $judul,
        $pembuat,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;



    // countructor 
    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0, $harga = 0, $jmlHarga = 0, $waktuMain = 0, $tipe = "tipe")
    {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHarga = $jmlHarga;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    //method untuk menampilkan sesuai dengan yang ada dibawah ini!!!
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.


    public function getLabel()
    {
        return "$this->pembuat, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";



        // perkondisian
        if ($this->tipe == "Komik") {

            // .= operator concat(penggabungan)
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}

//// object type

// membuat class baru
class CetakInfoProduk
{

    ///method
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->pembuat}, {$produk->penerbit}";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100, 0, "Komik");

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");


// tampilkan 
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
// studi kasus
// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam