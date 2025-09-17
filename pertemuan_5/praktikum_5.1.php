<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;
    public $keterangan;
    
    public function getKeterangan() {
        return "Status mahasiswa atas nama " . $this->nama . " (" . $this->nim . ") adalah **" . $this->keterangan . "**. <br>";
    }
}
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Andi Pratama";
$mahasiswa1->nim = "19050123";
$mahasiswa1->prodi = "Teknik Informatika";
$mahasiswa1->angkatan = 2019;
$mahasiswa1->keterangan = "Aktif";

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Budi Santoso";
$mahasiswa2->nim = "20060245";
$mahasiswa2->prodi = "Sistem Informasi";
$mahasiswa2->angkatan = 2020;
$mahasiswa2->keterangan = "Cuti";

$mahasiswa3 = new Mahasiswa();
$mahasiswa3->nama = "Citra Dewi";
$mahasiswa3->nim = "18040367";
$mahasiswa3->prodi = "Manajemen Bisnis";
$mahasiswa3->angkatan = 2018;
$mahasiswa3->keterangan = "Keluar";

echo $mahasiswa1->getKeterangan();
echo $mahasiswa2->getKeterangan();
echo $mahasiswa3->getKeterangan();
?>