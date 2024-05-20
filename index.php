<?php

$nilai1 = 80;
$nilai2 = 10;

//pertambahan
$pertambahan = $nilai1 + $nilai2;

//pengurangan
$pengurangan = $nilai1 + $nilai2;

//pembagian
$pembagian = $nilai1 + $nilai2;

echo ("nilai pertambahan" . $pertambahan . "</br>");

// $teman = "andi";


// if ($teman == "andi"){
//     echo "andi";
// }else if($teman == "budi" ){
//     echo "budi . </br>";
// }else{
//     echo"bukan andi ";
// }


// $hari = 0;
// switch ($hari){
//     case 0:
//          echo "Hari minggu";
//          break;
//     case 1:
//         echo "hari senin";
//         break;
//     case 2:
//         echo "hari selasa";
//         break;
//     case 3:
//         echo "Hari rabu";
//         break;
//     case 4:
//         echo "hari kamis";
//         break;
//     case 5:
//         echo "hari jumat";
//         break;
//     case 6:
//         echo "hari sabtu";
//         break;
//     default:
//         echo "hari tidak ditemukan";
//         break;    
// }
$nilai = 101;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 85 and $nilai <= 100) {
  echo "Grade: A";
} elseif ($nilai >= 75 && $nilai <= 84) {
  echo "Grade: B";
} elseif ($nilai >= 60 && $nilai <= 74) {
  echo "Grade: C";
} elseif ($nilai >= 50 && $nilai <= 59) {
  echo "Grade: D";
} elseif ($nilai >= 49 && $nilai <= 0) {
  echo "Grade: E";
} else {
  echo "Nilai tidak valid.";
}

echo "<br>";



$nilai3 = 100;
$result = match (true){
    $nilai3 > 85  && $nilai3 <= 100   => 'Grade A',
    $nilai3 >= 75 && $nilai3 <= 84  => 'Grade b',
    $nilai3 >= 60 && $nilai3 <= 74  => 'Grade c',
    $nilai3 >= 50 && $nilai3 <=59  => 'Grade d',
    $nilai3 >= 0 && $nilai3 <= 49 => 'Grade e',
};
echo "Nilai Match = " . $result;

