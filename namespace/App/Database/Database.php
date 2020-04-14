<?php

namespace App\Database;

class Database implements DatabaseInterface
{
    private $clientDriver;
    private $connection = [
        'sqlite' => [
            'driver' => 'sqlite',
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => ''
        ],
        'mysql' => [
            'driver' => 'mysql',
            'host' => '127.0.0.2',
            'username' => 'root2',
            'password' => ''
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => '127.0.0.3',
            'username' => 'root3',
            'password' => ''
        ],
        'sqlserver' => [
            'driver' => 'sqlserver',
            'host' => '127.0.0.4',
            'username' => 'root4',
            'password' => ''
        ],
    ];

    public function __construct()
    {
        $this->clientDriver = $this->connection['mysql'];
    }

    public function setDriver($driver)
    {
        $this->clientDriver = $driver;

        return $this;
    }

    public function connect()
    {
        $str = "* Koneksi yang digunakan: {$this->clientDriver}" . PHP_EOL;

        foreach ($this->connection[$this->clientDriver] as $key => $value) {
            $str .= "- {$key} : {$value}" . PHP_EOL;
        }

        echo $str;
    }
}