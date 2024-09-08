<?php
// Koneksi ke database
$servername = "localhost"; // atau 127.0.0.1 jika menggunakan localhost
$username = "root"; // username database, biasanya 'root' jika di localhost
$password = ""; // password database, biarkan kosong jika tidak ada password
$dbname = "artmind_db"; // nama database yang telah kamu buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Hash password sebelum disimpan
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// SQL untuk memasukkan data ke tabel 'users'
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";

// Jalankan query dan cek apakah berhasil
if ($conn->query($sql) === TRUE) {
    echo "Account created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
