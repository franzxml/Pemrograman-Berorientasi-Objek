<?php
class ItemPerpustakaan {
    public $judul,$tahun;
    public function __construct($judul,$tahun){$this->judul=$judul;$this->tahun=$tahun;}
    public function pinjam(){echo "Item $this->judul dipinjam.\n";}
}

class Buku extends ItemPerpustakaan {
    public $isbn;
    public function __construct($judul,$tahun,$isbn){parent::__construct($judul,$tahun);$this->isbn=$isbn;}
    public function pinjam(){echo "Buku $this->judul (ISBN:$this->isbn) dipinjam.\n";}
}

class DVD extends ItemPerpustakaan {
    public $durasi;
    public function __construct($judul,$tahun,$durasi){parent::__construct($judul,$tahun);$this->durasi=$durasi;}
    public function pinjam(){echo "DVD $this->judul ($this->durasi menit) dipinjam.\n";}
}

class Majalah extends ItemPerpustakaan {
    public $edisi;
    public function __construct($judul,$tahun,$edisi){parent::__construct($judul,$tahun);$this->edisi=$edisi;}
    public function pinjam(){echo "Majalah $this->judul edisi $this->edisi dipinjam.\n";}
}

trait Loggable { function logActivity(){echo "Aktivitas dicatat.\n";} }
trait Notifiable { function sendNotification(){echo "Notifikasi terkirim.\n";} }
trait Searchable { function search(){echo "Pencarian dilakukan.\n";} }

class Pengguna { use Loggable,Notifiable,Searchable; }
class Produk { use Loggable,Searchable; }
class Transaksi { use Loggable,Notifiable; }

$b = new Buku("Algoritma",2023,"12345");
$b->pinjam();

$d = new DVD("OOP",2022,120);
$d->pinjam();

$m = new Majalah("Teknologi",2024,"Vol.1");
$m->pinjam();

$t = new Transaksi();
$t->logActivity();
$t->sendNotification();