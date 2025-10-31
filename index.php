<?php

require_once('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(5);
// $lingkaran->jari = 10;
$lingkaran->tampil('roda'); //panggil method

LuasLingkaran::testing(); //panggil static method
