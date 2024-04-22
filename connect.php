<?php

try {
    $hostname = "10.20.12.225";
    $username = "root";
    $password = "Admin12345";
    $database = "ictpm_db";

    $conn = new mysqli($hostname, $username, $password, $database);

    // echo "Connected";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
