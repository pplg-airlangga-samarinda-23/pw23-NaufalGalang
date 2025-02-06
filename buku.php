<?php
include 'koneksi.php';
$query = "SELECT * FROM buku";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <a href="buku-tambah.php">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Buku</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Genre</th>
            <th>Tanggal Rilis</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id_buku']; ?></td>
            <td><?php echo $row['nama_buku']; ?></td>
            <td><?php echo $row['harga_buku']; ?></td>
            <td><?php echo $row['stok_buku']; ?></td>
            <td><?php echo $row['genre']; ?></td>
            <td><?php echo $row['tanggal_rilis']; ?></td>
            <td>
                <a href="buku-edit.php?id=<?php echo $row['id_buku']; ?>">Edit</a> |
                <a href="buku-hapus.php?id=<?php echo $row['id_buku']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>