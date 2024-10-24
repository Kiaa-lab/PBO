<?php
class Customer {
    // Atribut Customer
    public $id_customer;
    public $nama;
    public $alamat;
    public $email;
    public $no_telepon;
    public $tanggal_daftar;
    public $status_member;

    // Constructor untuk inisialisasi atribut customer
    public function __construct($id_customer = '', $nama = '', $alamat = '', $email = '', $no_telepon = '', $tanggal_daftar = '', $status_member = '') {
        $this->id_customer = $id_customer;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->email = $email;
        $this->no_telepon = $no_telepon;
        $this->tanggal_daftar = $tanggal_daftar;
        $this->status_member = $status_member;
    }

    public function tampilkanInfoCustomer() {
        // Menampilkan semua atribut customer
        echo "ID Customer: " . $this->id_customer . "<br>";
        echo "Nama: " . $this->nama . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "No. Telepon: " . $this->no_telepon . "<br>";
        echo "Tanggal Daftar: " . $this->tanggal_daftar . "<br>";
        echo "Status Member: " . $this->status_member . "<br>";
    }
}
class Barang {
    // Atribut Barang
    public $id_barang;
    public $nama_barang;
    public $harga;
    public $stok;
    public $kategori;
    public $pembelian;

    // Constructor untuk inisialisasi atribut barang
    public function __construct($id_barang = '', $nama_barang = '', $harga = 0, $stok = 0, $kategori = '', $pembelian = 0) {
        $this->id_barang = $id_barang;
        $this->nama_barang = $nama_barang;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->kategori = $kategori;
        $this->pembelian = $pembelian;
    }

    public function tampilkanInfoBarang() {
        // Menampilkan semua atribut barang
        echo "ID Barang: " . $this->id_barang . "<br>";
        echo "Nama Barang: " . $this->nama_barang . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "Stok: " . $this->stok . "<br>";
        echo "Kategori: " . $this->kategori . "<br>";
        echo "Pembelian: " . $this->pembelian . "<br>";
    }

    public function stokAkhirBarang() {
        // Menghitung stok akhir
        return $this->stok - $this->pembelian;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Membuat objek baru dari class Barang
    $barang = new Barang($_POST['id_barang'], $_POST['nama_barang'], intval($_POST['harga']), intval($_POST['stok']), $_POST['kategori'], intval($_POST['pembelian']));

    // Membuat objek baru dari class Customer
    $customer = new Customer($_POST['id_customer'], $_POST['nama'], $_POST['alamat'], $_POST['email'], $_POST['no_telepon'], $_POST['tanggal_daftar'], $_POST['status_member']);

    // Menampilkan informasi customer
    echo "<h2>Informasi Customer:</h2>";
    $customer->tampilkanInfoCustomer();

    // Menampilkan informasi barang
    echo "<h2>Informasi Barang:</h2>";
    $barang->tampilkanInfoBarang();

    // Menghitung dan menampilkan stok akhir
    $stokAkhir = $barang->stokAkhirBarang();
    echo "<h2>Stok Akhir Barang:</h2>";
    echo "Stok Akhir: " . $stokAkhir . "<br>";
}
?>
