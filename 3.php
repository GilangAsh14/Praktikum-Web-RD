<?php
   echo "Tugas nomor 3 <br>";
   echo "bilangan prima dari 1-50 : ";
   for($m=1; $m<=50; $m++){
       $k=0;
       for($n=1; $n<=$m; $n++){
           if($m % $n == 0){
               $k++;
           }
       }
       if($k == 2){
           echo $m." ";
       }
   }
?>