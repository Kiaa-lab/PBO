<?php
class Produk {
    public $namaProduk;
    public $jenisProduk;
    public $jumlahProduk;
    public $stok;
    public $pembelian;

    public function stokAkhirProduk (){
        $this->stok = ($this->stok - $this->pembelian);
        return $this->stok;
    }
}

$panggilProduk = new Produk ();
$panggilProduk -> stok = 50;
$panggilProduk -> pembelian = 10;
echo $panggilProduk -> stokAkhirProduk();