<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;
    
    public function luas() {
        return "Luas persegi panjang adalah: " . ($this->panjang * $this->lebar).",". " ";
    }
    public function keliling() {
        return "Keliling persegi panjang adalah: " . (2 * ($this->panjang + $this->lebar));
    }
}
$pp = new PersegiPanjang();
$pp->panjang = 3;
$pp->lebar = 2;

echo $pp->luas();
echo $pp->keliling();
?>