<?php
class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function tampilkanInfo() {
        return "Berikut adalah produk milik kami: ". ($this->nama) ." " .  "Berjumlah: " . ($this->stok) . " ". "Dengan harga: " . ($this->harga);
    }
    public function beliProduk($jumlah) {
        return "Jika anda membeli dengan jumlah: " . ($jumlah) . " ". "Maka stok tersisa: " . ($this->stok - $jumlah);
    }
}
$p = new Produk();
$p->nama = "Taro";
$p->stok = 10;
$p->harga = 2000;

echo $p->tampilkanInfo();
echo $p->beliProduk(5);
?>