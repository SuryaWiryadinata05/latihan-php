<?php

$helm = "ada";
$stnek = "ada";
$simm = "ada";

if ($helm == "ada" && $stnek == "tidak" && $simm == "tidak"){
    echo "jika hanya menggunakan helm<br>";
    echo "kami cek perlengkapan surat sim & stnk nya<hr><br>";
    
} elseif ($helm == "ada" && $stnek == "ada" && $simm == "tidak") {
    echo "jika memakai helm dan membawa stnk<br>";
    echo "surat lengkap boleh kami cek sim nya ?<hr><br>";
} elseif ($helm == "ada" && $stnek == "ada" && $simm == "ada") {
    echo "jika memakai helm dan membawa sim dan stnk<br>";
    echo "selamat berkendara berhati hati dijalan<hr>";
} else{
    echo "anda kami tilang";
}
?>