<?php

require_once 'Produk.php';

class Komik extends Produk
{
    private $jumlahHalaman = 0;

    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function setJumlahHalaman($jumlahHalaman)
    {
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getJumlahHalaman()
    {
        return $this->jumlahHalaman;
    }

    public function printInfo()
    {
        return "Komik: " . parent::getLable() . " - {$this->jumlahHalaman} Halaman" . PHP_EOL;
    }
}