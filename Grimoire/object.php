<?php
class Mobil {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function info() {
        return "Mobil ini adalah " . $this->merk . " berwarna " . $this->warna . ".";
    }

    public function gantiWarna($warnaBaru) {
        $this->warna = $warnaBaru;
    }
}
$mobil1 = new Mobil("Toyota", "Merah");
echo $mobil1->info(); // Output: Mobil ini adalah Toyota berwarna Merah.
$mobil1->gantiWarna("Biru");
echo $mobil1->info(); // Output: Mobil ini adalah Toyota berwarna Biru.

echo "<pre>";
var_dump($mobil1);
echo "</pre>";
?>