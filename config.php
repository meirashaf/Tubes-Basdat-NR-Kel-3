<?php
require_once __DIR__ . "/vendor/autoload.php";
$collection = (new MongoDB\Client)->tubes->produk;
$cart = (new MongoDB\Client)->tubes->keranjang;
$order = (new MongoDB\Client)->tubes->pemesanan;
$pay = (new MongoDB\Client)->tubes->pembayaran;
