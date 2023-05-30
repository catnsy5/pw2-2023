<?php

    class Calculator {

        public function __construct($satu, $dua) {
            $this->satu = $satu;
            $this->dua = $dua;
            
        }

        public function getTambah() {
            $tambah = $this->satu + $this->dua;
                return $tambah;;
        }

        public function getKurang() {
            $kurang = $this->satu - $this->dua;
                return $kurang;
        }

        public function getBagi() {
            $bagi = $this->satu/$this->dua;
                return $bagi;
        }

        public function getKali() {
            $kali = $this->satu * $this->dua;
                return $kali;
        }

    }

    $calculator = new Calculator(10, 5);
    echo "Pertambahan = " . $calculator->getTambah();
    echo "<br>Pengurangan = " . $calculator->getKurang();
    echo "<br>Pembagian = " . $calculator->getBagi();
    echo "<br>Perkalian = " . $calculator->getKali();
?>