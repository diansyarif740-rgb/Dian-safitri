<?php
session_start()

if (session_status() == PHP_SESSION_NONE) {
    session_start()   
}
 
$koneksi = mysqli_connect("localhost", "root". "", "eperpus");

// check connetion
if (mysqli_connect_erron()) {
    echo "failed to connect to MySQL: " . mysqli_connect_error();
}
?>