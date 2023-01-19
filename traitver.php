<?php

trait Waktu {
    public function TanggalIndonesia($tahun, $bulan, $tanggal){
        return "Sekarang tanggal $tanggal bulan $bulan tahun $tahun";
    }
}

class Pembelian {
    use Waktu ;
    public function tampilkanTanggal($tahun, $bulan, $tanggal){
        echo $this->TanggalIndonesia($tahun, $bulan, $tanggal);
    }
}

$pembelian = new Pembelian();
$pembelian->tampilkanTanggal(2024, 12, 19);
echo "<br>";
echo $pembelian->TanggalIndonesia(2024, 12, 19)

?>