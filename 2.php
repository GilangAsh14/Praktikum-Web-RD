<?php
   echo "Tugas Nomor 2 <br>";
   echo "data sebelum diurutkan : larine, aduh, qifuat, toda, anevi, samid, kifuat <br>";
   echo "<br> data setelah diurutkan : <br>";
   $data = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
   sort($data);
   for ($i=0; $i<=6; $i++){
       echo $data[$i]." ";
   }
?>