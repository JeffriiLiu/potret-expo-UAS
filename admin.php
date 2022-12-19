<html>
<head>
  <title>Data Gambar</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
<h1>Data Gambar</h1><hr>
<a class="tambah" href="form.php">Tambah Gambar</a><br>
<a class="home" href="home.php">home</a>
<div class="tabel">
<table border="1" cellpadding="18">
<tr>
  <th>Gambar</th>
  <th>Nama File</th>
  <th>Ukuran File</th>
  <th>Tipe File</th>
  <th>aksi</th>
</tr>

<tr>
  <td>
    <a href="">hapus</a>
  </td>
</tr>
</div>
<?php
// Load file koneksi.php
include "koneksi2.php";
$query = "SELECT * FROM gambar"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['ukuran']."</td>";
    echo "<td>".$data['tipe']."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
</body>
</html>