<?php
class kendaraan {
    var $cepat;
    var $lambat;

    public function jalan(){
        return "vroom";
    }
}

class avanza extends kendaraan {
    public function jalan(){
        return "Avanza: " . parent::jalan() . " cepet: " . $this->cepat . " lambat: " . $this->lambat;
    }
}