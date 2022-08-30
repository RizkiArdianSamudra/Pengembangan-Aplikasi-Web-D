<?php
    function nyoba($nama,$barang,$jumlah){
        for ($i=1; $i <= $jumlah; $i++){
            echo ("$i. $nama membeli $barang sebanyak ". $jumlah. "<br>");
        }
    }
    nyoba('Rizki','susu',5);
    echo("----------------------------------------<br>");

    nyoba('Ardi','mangga',4);
    echo("----------------------------------------<br>");
    
    nyoba('Siska','baju',3);
?>