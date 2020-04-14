<?php

require_once 'App/init.php';

use App\Database\Database as Database;

$database = new Database();
$database->setDriver('mysql')->connect();

// NEXT
// 1. overloading
// 2. interceptor
// 3. polymorphism
// 4. dependency injection
// 5. autoloading with psr-4