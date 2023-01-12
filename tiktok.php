<?php

class tiktok {

    public $warna = "warna";
    public $user = "user";
    public $developer = "developer";

    public function follow (){

    }

    public function unfollow (){

    }

    public function tambahVideo (){

    }

    public function hapusVideo (){

    }

    public function notifFollow (){
        return "This user follow you!";
    }

    public function getKnow (){
        return "$this->warna, $this->user";
    }

}

$akun_dk = new Tiktok;
$akun_dk->warna = "Hitam";
$akun_dk->user = "Dokyeom";
$akun_dk->developer = "ByteDance";

//echo "Mobil Adeeva : " . $mobil_adeeva->nama, $mobil_adeeva->merk;
//var_dump($mobil_adeeva->);

echo $akun_dk->notifFollow();
echo $akun_dk->getKnow();

$akun_myk = new Tiktok;


?>