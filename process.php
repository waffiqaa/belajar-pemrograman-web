<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$db = "kontak_wafiq";

$conn = new mysqli($host, $user, $password, $db);

// Cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$pesan = $_POST['pesan'];

// Masukkan data ke database
$sql = "INSERT INTO kontak_form (nama, email, whatsapp, pesan) VALUES ('$nama', '$email', '$whatsapp', '$pesan')";

if ($conn->query($sql) === TRUE) {
  echo "Pesan berhasil dikirim!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>