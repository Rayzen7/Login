<?php

   $koneksi = mysqli_connect('localhost' , 'root', '', 'myaccount');
   if(!$koneksi){
    echo "koneksi gagal";
   } 
?>