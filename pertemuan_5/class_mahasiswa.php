<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;
    public $keterangan;
    
    public function getKeterangan() {
        return "Status mahasiswa atas nama " . $this->nama . " (" . $this->nim . ") adalah " . $this->keterangan . ". <br>";
    }
}
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Arjun Maheswara Paundra";
$mahasiswa1->nim = "H1101241056";
$mahasiswa1->prodi = "Sistem Informasi";
$mahasiswa1->angkatan = 2024;
$mahasiswa1->keterangan = "Aktif";

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Frans Maylandgo Saragih";
$mahasiswa2->nim = "H1101241059";
$mahasiswa2->prodi = "Sistem Informasi";
$mahasiswa2->angkatan = 2024;
$mahasiswa2->keterangan = "Cuti";

$mahasiswa3 = new Mahasiswa();
$mahasiswa3->nama = "Bagas";
$mahasiswa3->nim = "H1101241022";
$mahasiswa3->prodi = "Sistem Informasi";
$mahasiswa3->angkatan = 2024;
$mahasiswa3->keterangan = "Keluar";

echo $mahasiswa1->getKeterangan();
echo $mahasiswa2->getKeterangan();
echo $mahasiswa3->getKeterangan();
?>