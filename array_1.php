<?php
$people =   array("kode_barang" =>["001","002","003"],
                "nama_barang"   =>["Hoodie","_Jaket","_Vest_"],
                "Harga"         =>[50000,55000,45000]);
        for ($i=0; $i < count($people["kode_barang"]); $i++) { 
            echo "|".$people["kode_barang"][$i];
        for ($j=$i; $j < count($people["nama_barang"]); $j+=3) { 
            // echo "\n";
            echo "|".$people["nama_barang"][$j];
        for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
            echo "|".$people["Harga"][$k];
            echo "\n";
            }
        }
    }
?>