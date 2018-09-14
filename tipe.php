<?php
$nim = "123456789";
$nama = 'Arif Ajah';
$umur = 16;
$nilai = 82.25;
$status = true;
$a= "bunda";
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama <br>";
print "Umur : " . $umur;
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status){
    echo "Status : Aktif";
}else{
    echo "Status : Tidak Aktif"; 
}