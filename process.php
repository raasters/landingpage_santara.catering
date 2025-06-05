<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pesan = $_POST['pesan'];
    
    // Di sini Anda bisa menambahkan logika untuk mengirim email
    // atau menyimpan pesan ke file
    
    // Redirect kembali ke halaman utama
    header("Location: index.php?status=success");
    exit();
}
?> 