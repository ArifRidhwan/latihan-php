<?php
$uang1 = 50000;
$uang2 = 25000;
$uang3 = 10000;
$totalbelanja = ($uang1-$uang2+$uang3);
$sisa =Rp. $totalbelanja;
echo "Hari Memiliki Uang Rp. $uang1 <br>";
echo "Uang Makan : Rp.$uang2 <br>";
echo "Uang Minuman : Rp.$uang3 <br>";
if($sisa >-1) {
    echo "Sisa Uang Hari Dari Hasil Pembelian Tadi Rp.$sisa <br>";
    echo "Hari Tidak Boros Dalam Perbelanjaan <br>";
}else if ($sisa <0){
    echo "Sisa Uang Hari Dari Hasil Pembelian Tadi Rp.$sisa <br>";
    echo "Hari Boros Dalam Perbelanjaan";
}
?>


