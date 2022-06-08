<?php

use Produk as GlobalProduk;

class Produk
{
    /// Property / data variable
    private $judul,
        $pembuat,
        $penerbit,
        $harga, $diskon = 0;


    // countructor 
    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0, $harga = 0)
    {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    // method setter
    public function getJudul()
    {

        return $this->judul;
    }

    //method getter dan ini membutuhkan parameter
    public function setJudul($judul)
    {
        // if (!is_string($judul)) {

        //     throw new Exception("Judul Harus string");
        // }
        $this->judul = $judul;
    }


    public function setPembuat($pembuat)
    {
        $this->pembuat = $pembuat;
    }

    public function getPembuat()
    {
        return $this->pembuat;
    }

    //setter
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    //getter
    public function getPenerbit()
    {
        return $this->penerbit;
    }










    //method untuk menampilkan sesuai dengan yang ada dibawah ini!!!
    // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.


    // protected untuk diskon
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDison()
    {
        return $this->diskon;
    }
    // protected  untuk menampuilkan data diskon;
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

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
    // properti dan methodnya
    public $jmlHalaman;

    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0, $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $pembuat, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        // jangan sama s=methodnya di parent class
        // kenapa redudansi karena tiak boleh sama akan muter" terus, maka dari itu gunakan overidding
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Membuat class child untuk game(inheritance)
class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0, $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $pembuat, $penerbit, $harga,);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
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

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);



// protected
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<br>";

echo "<hr>";


//$produk1->judul = "Judulbaruahahah"; itu tidak bisa mengenali karna private maka dari itu gunakanlah setter;

//mengubah judulnya dengan gaya setter dan getter

$produk1->setJudul("Anom Ganteng");
echo $produk1->getJudul();

echo "<br>";

echo $produk2->getPenerbit();
