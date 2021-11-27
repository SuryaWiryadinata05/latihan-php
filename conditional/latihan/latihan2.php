<?php

$ipk = 3.3  ;

if ($ipk >= 0 && $ipk < 2) {
    echo "grade e<br>";
    echo "maaf anda harus mengulang";
} else if ($ipk > 2.1 && $ipk < 2.3) {
    echo "grade d<br>";
    echo "maaf anda harus memperbaiki mata kuliah";
} else if ($ipk > 2.6 && $ipk < 2.9) {
    echo "grade c<br>";
    echo "mau memperbaiki boleh tidak juga tidak apa-apa";
}else if ($ipk > 3 && $ipk <= 3.5) {
    echo "grade B<br>";
    echo "mata kuliah anda baik";
}else if ($ipk > 3.5 && $ipk < 4) {
    echo "grade a<br>";
    echo "mata kuliah anda super";
} else{
    echo "system error";
}
?>