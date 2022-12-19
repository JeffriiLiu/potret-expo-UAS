<?php
$con = mysqli_connect("localhost", "root", "", "tekpro2"); // Koneksi ke database

function query($query) {
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword) {
    $query = "SELECT * FROM gambar WHERE nama LIKE '%$keyword%' ";
    return query($query);
}
?>