<?php

class mahasiswa{
    private $nama = "AHMAD YAHYA<br/>";
    private $nim = "G.211.21.0097";

    function __construct() {

    }

    function setNama($a) {
        $this->nama=$a;
    }
    
    function setNim($b) {
        $this->nim=$b;
    }

    function getNama() {
        return "Nama saya :" .$this->nama;
    }

    function getNim() {
        return "NIM :" .$this->nim;
    }

    function __destruct() {

    }
}

?>