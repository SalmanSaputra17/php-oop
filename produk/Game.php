<?php

require_once 'Produk.php';

class Game extends Produk
{
    private $waktuMain = 0;

    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function setWaktuMain($waktuMain)
    {
        $this->waktuMain = $waktuMain;
    }

    public function getWaktuMain()
    {
        return $this->waktuMain;
    }

    public function printInfo()
    {
        return "Game: " . parent::getLable() . " ~ {$this->waktuMain} Jam" . PHP_EOL;
    }
}