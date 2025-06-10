<?php
// Memanggil dan menampilkan isi file latihan31.php
include 'latihan31.php';

echo "<br><br>";

// Mengganti perulangan for dengan while
$a = 0;
while ($a < 10) {
    echo "Nilai A = " . $a . " ";
    if ($a % 2 == 0) {
        echo "Nilai $a adalah bilangan genap <br>";
    } else {
        echo "Nilai $a adalah bilangan ganjil <br>";
    }
    $a++;
}
?>
