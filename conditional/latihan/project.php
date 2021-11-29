<?php

$nama = "budi";
$status = "manager";



echo "<center><h2>pt . jatuh bangkit lagi</h2></center><br><hr>";


switch($nama){
    case "budi":

    $nama = "budi";
    $gaji = 4500000;
    $p_pajak = (2.5/100) * 4500000;
    $u_transport = 50000 * 24;
    $org_bpjs = 5 * 150000;
    $tunjangan = (10/100) * 4500000;
    $lembur = 45 * 50000;
    echo "Nama pekerja : ".$nama."<br>";
    echo "Status : ".$status."<br>";
    if ($status == "manager"){
        
        echo "Gaji pokok : ".$gaji."<br>";
    
    echo "potongan pajak : $p_pajak<br>";
    echo "uang transport : $u_transport<br>";
    echo "potongan BPJS : $org_bpjs<br>";
    echo "tunjangan gaji budi : $tunjangan<br>";
    echo "lembur budi : $lembur<br>";

    $bonus = $tunjangan + $lembur + $u_transport;
    $total_potongan = $p_pajak + $org_bpjs;
    $gaji_bersih = ($gaji - $total_potongan) + $bonus;
    echo " gaji bersih budi : $gaji_bersih";

    }
    break;
    case "ratna":
        $nama = "ratna";
        $gaji = 3500000;
        $p_pajak = (2.5/100) * 3500000;
        $u_transport = 35000 * 24;
        $org_bpjs = 1 * 150000;
        $tunjangan = (10/100) * 3500000;
        $lembur = 35 * 45000;
        echo "Nama pekerja : ".$nama."<br>";
        echo "Status : ".$status."<br>";
        if ($status == "sekretaris"){
            
            echo "Gaji pokok : ".$gaji."<br>";
        
        echo "potongan pajak : $p_pajak<br>";
        echo "uang transport : $u_transport<br>";
        echo "potongan BPJS : $org_bpjs<br>";
        echo "tunjangan gaji ratna : $tunjangan<br>";
        echo "lembur ratna : $lembur<br>";
    
        $bonus = $tunjangan + $lembur + $u_transport;
        $total_potongan = $p_pajak + $org_bpjs;
        $gaji_bersih = ($gaji - $total_potongan) + $bonus;
        echo " gaji bersih sekretaris : $gaji_bersih";
    
        }
        break;
}
?>



