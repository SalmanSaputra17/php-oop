<?php

require_once 'Produk.php';

// define('ENV', 'Local');

class PrintInfo
{
    // const STATE = 'Good';

    // public static $condition = "Morning";

    // public static function sayHello()
    // {
    //     echo "Hello World !, Good " . self::$condition . PHP_EOL;
    // }

    private $productList = [];

    public function add(Produk $produk)
    {
        $this->productList[] = $produk;
    }

    public function print()
    {
        $str = "* Daftar Produk" . PHP_EOL;

        foreach ($this->productList as $row) {
            $str .= "- {$row->printInfo()}";
        }

        echo $str;
    }
}