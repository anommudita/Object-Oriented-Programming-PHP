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
        $waktuMain;




    // countructor 
    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0, $harga = 0, $jmlHarga = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHarga = $jmlHarga;
        $this->waktuMain = $waktuMain;
    }

    //method untuk menampilkan sesuai dengan yang ada dibawah ini!!!
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.


    public function getLabel()
    {
        return "$this->pembuat, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// Membuat class child baru dengan parent produk(inheritance)
class Komik extends Produk
{
    public function getInfoProduk()
    {
        // kenapa redudansi karena tiak boleh sama akan muter" terus, maka dari itu gunakan overidding
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Membuat class child untuk game(inheritance)
class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);


// tampilkan 
echo $produk1->getInfoProduk();
echo $produk2->getInfoProduk();
// studi kasus
// Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam