<?php

//use CetakInfoProduk as GlobalCetakInfoProduk;
//use Produk as GlobalProduk;

//use Produk as GlobalProduk;

interface infoProduk
{
    public function getInfoProduk();
}
abstract class Produk
{
    protected $judul,
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


    // method abstract
    abstract public function getInfo();
}

// Membuat class child baru dengan parent produk(inheritance)
class Komik extends Produk implements infoProduk
{
    // properti dan methodnya
    public $jmlHalaman;

    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0, $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $pembuat, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        // jangan sama s=methodnya di parent class
        // kenapa redudansi karena tiak boleh sama akan muter" terus, maka dari itu gunakan overidding
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

// Membuat class child untuk game(inheritance)
class Game extends Produk implements infoProduk
{
    public $waktuMain;

    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0, $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $pembuat, $penerbit, $harga,);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// class menampilakan banyak info
class CetakInfoProduk
{

    public $daftarProduk = array();
    // object type
    // mengambildata dari class utamannya
    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
