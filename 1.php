<?php
    echo "Tugas Nomor 1 <br> <br>";
    $a = 10;
    $b = 5;
    echo "bilangan 1 = $a <br>";
    echo "bilangan 2 = $b <br>";
    echo "<br> Berikut merupakan hasil dari setiap operasi <br>";
    Penjumlahan($a,$b);
    Pengurangan($a,$b);
    Perkalian($a,$b);
    Pembagian($a,$b);
    Modulus($a,$b);

    function Penjumlahan($a,$b){
        $hasil = $a + $b;
        echo "<br> PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo"hasil : $hasil <br>";
    }
    function Pengurangan($a,$b){
        $hasil = $a - $b;
        echo "<br> PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo"hasil : $hasil <br>";
    }
    function Perkalian($a,$b){
        $hasil = $a * $b;
        echo "<br> PERKALIAN <br>";
        echo "Operator : * <br>";
        echo"hasil : $hasil <br>";
    }
    function Pembagian($a,$b){
        $hasil = $a / $b;
        echo "<br> PEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo"hasil : $hasil <br>";
    }
    function Modulus($a,$b){
        $hasil = $a % $b;
        echo "<br> MODULUS <br>";
        echo "Operator : % <br>";
        echo"hasil : $hasil <br>"; }
    ?>