<?php

namespace App\Math;

class LuasLingkaran {

    public const phi = 3.14;
    protected int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari;
    }


    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini testing static";
    }

    public function __destruct() {
        echo "udah ah cape";
    }
}



