<?php
// Misalnya, mengambil nilai dari input form jika ada
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$komentar = isset($_POST['komentar']) ? $_POST['komentar'] : '';

echo "<head><title>My Guest Book</title></head>";

$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama | $alamat | $email | $status | $komentar\n");
fclose($fp);

echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href='tampilan.html'>Isi Buku Tamu</a><br>";
echo "<a href='lihat.php'>Lihat Buku Tamu</a><br>";
