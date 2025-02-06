<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_buku = $_POST['nama_buku'];
    $harga_buku = $_POST['harga_buku'];
    $stok_buku = $_POST['stok_buku'];
    $genre = $_POST['genre'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    
    $query = "INSERT INTO buku (nama_buku, harga_buku, stok_buku, genre, tanggal_rilis) VALUES ('$nama_buku', '$harga_buku', '$stok_buku', '$genre', '$tanggal_rilis')";
    if (mysqli_query($conn, $query)) {
        header('Location: buku.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form method="POST">
        Nama Buku: <input type="text" name="nama_buku" required><br>
        Harga Buku: <input type="number" name="harga_buku" required><br>
        Stok Buku: <input type="number" name="stok_buku" required><br>
        Genre: <input type="text" name="genre" required><br>
        Tanggal Rilis: <input type="date" name="tanggal_rilis" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
