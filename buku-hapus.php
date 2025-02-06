<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM buku WHERE id_buku=$id";
if (mysqli_query($conn, $query)) {
    header('Location: buku.php');
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
