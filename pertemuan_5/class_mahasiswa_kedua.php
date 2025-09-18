<?php
class Mahasiswa {
  public $nama;
  public $nim;
  public $prodi;
  protected $ipk;
  private $password;   

  protected function getNilaiIPK() {
    return "Nilai IPK mahasiswa adalah $this->ipk";
  }

  private function getPassword() {
    return "Password akun mahasiswa adalah $this->password";
  }

  public function setNilaiIPK($ipk) {
    $this->ipk = $ipk;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function showIPK() {
    return $this->getNilaiIPK();
  }

  public function showPassword() {
    return $this->getPassword();
  }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Budi";
$mahasiswa->nim = "H11012345";
$mahasiswa->prodi = "Sistem Informasi";

$mahasiswa->setNilaiIPK(3.85);
$mahasiswa->setPassword("abcdefg");

echo "Nama   : $mahasiswa->nama <br>";
echo "NIM    : $mahasiswa->nim <br>";
echo "Prodi  : $mahasiswa->prodi <br>";
echo $mahasiswa->showIPK() . "<br>";
echo $mahasiswa->showPassword() . "<br>";
?>