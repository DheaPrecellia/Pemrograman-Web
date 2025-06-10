<?php
// Mengatur zona waktu ke WIB (Waktu Indonesia Barat)
date_default_timezone_set('Asia/Jakarta');

// Mendapatkan tanggal dan waktu saat ini
$tanggal_waktu = date('Y-m-d H:i:s');

// Menyiapkan pesan email
$to = "recipient@example.com"; // Ganti dengan email penerima
$subject = "Notifikasi Tanggal dan Waktu";
$message = "Halo,\n\nTanggal dan waktu saat ini adalah: $tanggal_waktu WIB.\nTerima kasih!";
$headers = "From: sender@example.com\r\n"; // Ganti dengan email pengirim

// Mengirim email
mail($to, $subject, $message, $headers);

// Menampilkan tanggal dan waktu di browser
echo "Tanggal dan waktu saat ini: $tanggal_waktu WIB<br>";
echo "Email notifikasi telah dikirim ke $to";
?>