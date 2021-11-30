<?php

$siswa = [
          ['nama' => 'wildan','jk' => 'laki-laki','umur' => '16 tahun'],
          ['nama' => 'virgi','jk' => 'laki-laki','umur' => '17 tahun'],
          ['nama' => 'rohesa','jk' => 'laki-laki','umur' => '16 tahun'],
];

foreach($siswa as $value){
    echo "nama : " . $value ['nama']. "<br>";
    echo "jenis kelamin : " . $value ['jk']. "<br>";
    echo "umur : " . $value ['umur']. "<br>";
    echo "<hr>";
}
?>