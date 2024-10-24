<?php require 'barang.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Barang</title>
</head>
<body>
    
<form method="POST" action="">
    <h2>Data Barang</h2>
    <label for="id_barang">ID Barang:</label>
    <input type="text" id="id_barang" name="id_barang" required><br><br>
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" id="nama_barang" name="nama_barang" required><br><br>
    <label for="harga">Harga:</label>
    <input type="number" id="harga" name="harga" required><br><br>
    <label for="stok">Stok Awal:</label>
    <input type="number" id="stok" name="stok" required><br><br>
    <label for="kategori">Kategori:</label>
    <input type="text" id="kategori" name="kategori" required><br><br>
    <label for="pembelian">Jumlah Pembelian:</label>
    <input type="number" id="pembelian" name="pembelian" required><br><br>
    <label for="barcode">Barcode:</label>
    <input type="text" id="barcode" name="barcode" required><br><br>
    <label for="expiredate">Tanggal Kadaluarsa:</label>
    <input type="date" id="expiredate" name="expiredate" required><br><br>

    <h2>Data Customer</h2>
    <label for="id_customer">ID Customer:</label>
    <input type="text" id="id_customer" name="id_customer" required><br><br>
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>
    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="no_telepon">No Telepon:</label>
    <input type="text" id="no_telepon" name="no_telepon" required><br><br>
    <label for="tanggal_daftar">Tanggal Daftar:</label>
    <input type="date" id="tanggal_daftar" name="tanggal_daftar" required><br><br>
    <label for="status_member">Status Member:</label>
    <input type="text" id="status_member" name="status_member" required><br><br>

    <input type="submit" value="Simpan Data">
</form>


</body>
</html>
