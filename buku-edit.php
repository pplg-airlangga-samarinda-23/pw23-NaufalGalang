<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM buku WHERE id_buku = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_buku = $_POST['nama_buku'];
    $harga_buku = $_POST['harga_buku'];
    $stok_buku = $_POST['stok_buku'];
    $genre = $_POST['genre'];
    $tanggal_rilis = $_POST['tanggal_rilis'];
    
    $query = "UPDATE buku SET nama_buku='$nama_buku', harga_buku='$harga_buku', stok_buku='$stok_buku', genre='$genre', tanggal_rilis='$tanggal_rilis' WHERE id_buku=$id";
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
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form method="POST">
        Nama Buku: <input type="text" name="nama_buku" value="<?php echo $row['nama_buku']; ?>" required><br>
        Harga Buku: <input type="number" name="harga_buku" value="<?php echo $row['harga_buku']; ?>" required><br>
        Stok Buku: <input type="number" name="stok_buku" value="<?php echo $row['stok_buku']; ?>" required><br>
        Genre: <input type="text" name="genre" value="<?php echo $row['genre']; ?>" required><br>
        Tanggal Rilis: <input type="date" name="tanggal_rilis" value="<?php echo $row['tanggal_rilis']; ?>" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>