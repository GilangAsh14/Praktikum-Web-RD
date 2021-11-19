<?php

include "minggu6.php";
class buah
{
    var $TotalMANGGA, $TotalJAMBU, $TotalSALAK;
   
    public function __construct($MANGGA, $JAMBU, $SALAK){
        $this->MANGGA = $MANGGA;
        $this->JAMBU = $JAMBU;
        $this->SALAK = $SALAK;
    }
    public function getMANGGA(){
        $this->TotalMANGGA = $this->MANGGA * 15000;
        echo "<br>MANGGA : ".$this->TotalMANGGA;
    }

    public function getJAMBU(){
        $this->TotalJAMBU = $this->JAMBU * 13000;
        echo "<br>JAMBU : ".$this->TotalJAMBU;
    }

    public function getSALAK(){
        $this->TotalSALAK = $this->SALAK * 10000;
        echo "<br>SALAK: ".$this->TotalSALAK;
    }

    public function Total(){
        $Total = $this->TotalMANGGA + $this->TotalJAMBU + $this->TotalSALAK;
        echo "<br>Total yang Harus Dibayar = ". $Total;
    }
}

$MANGGA = $_POST["MANGGA"];
$JAMBU = $_POST["JAMBU"];
$SALAK = $_POST["SALAK"];

$transaksi = new buah($MANGGA, $JAMBU, $SALAK);
$transaksi->getMANGGA();
$transaksi->getJAMBU();
$transaksi->getSALAK();
$transaksi->Total();

?>