<?php

$connection = new mysqli('docker_mysql', 'root', 'huss4321', 'mysql');
if ($connection) {
    echo 'DB connected';
}
    