<?php
$nilai = 432;
echo $nilai,"<br>";
//pake kondisi TRUE untuk nilai 0
switch(true){
  case ($nilai > 100) :
    echo "Nilai Mahasiswa : MUSTAHIL";
    break;
  case ($nilai >= 80 && $nilai <= 100) :
    echo "Nilai Mahasiswa : A";
    break;
  case ($nilai >= 70 && $nilai < 80) :
    echo "Nilai Mahasiswa : B";
    break;
  case ($nilai >= 60 && $nilai < 70) :
    echo "Nilai Mahasiswa : C";
    break;
  case ($nilai > 0 && $nilai < 60) :
    echo "Nilai Mahasiswa : D";
    break;
  default :
    echo "Nilai Mahasiswa : E";
}
?>
