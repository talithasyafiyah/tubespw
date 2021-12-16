<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    $HOST = 'localhost';
    $USER = 'root';
    $PASSWORD = '';
    $DATABASE_NAME = "stockbarang";

    $CONN = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE_NAME);

    if(!$CONN)
    {
        die("Koneksi dengan database gagal: ".mysqli_connect_error()." - ".mysqli_connect_error());
    }
?>