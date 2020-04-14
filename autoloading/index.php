<?php

require_once 'App/init.php';

$database = new Database();
$database->setDriver('mysql')->connect();