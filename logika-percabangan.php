<?php
$nilai = 84;

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



//$nilai3 = 100;
$result = match (true){
    $nilai > 85  && $nilai <= 100   => 'Grade A',
    $nilai >= 75 && $nilai <= 84  => 'Grade b',
    $nilai >= 60 && $nilai <= 74  => 'Grade c',
    $nilai >= 50 && $nilai <=59  => 'Grade d',
    $nilai >= 0 && $nilai <= 49 => 'Grade e',
};
echo "Nilai Match = " . $result;
