<?php
$koneksi = new mysqli('127.0.0.1', 'root', '', 'lab_ci4');

if ($koneksi->connect_error) {
    die("Gagal koneksi: " . $koneksi->connect_error);
} else {
    echo "Berhasil koneksi ke database.";
}
