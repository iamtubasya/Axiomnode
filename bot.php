<?php

date_default_timezone_set("Asia/Jakarta");
$hitam="\033[0;30m"; $abu2="\033[1;30m";               $putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";             $hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";           $biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";             $lblue="\033[0;36m"; $lblue2="\033[1;36m";                                                       $putih1="\033[7;37m";$merah1="\033[7;31m";                                  $hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";                                   $ungu1="\033[7;35m";$lblue1="\033[7;36m";

include("@iamtubasya");

function banner(){
date_default_timezone_set('Asia/Jakarta');
$hitam="\033[0;30m"; $abu2="\033[1;30m";$putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";$hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";$biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";$lblue="\033[0;36m"; $lblue2="\033[1;36m";$putih1="\033[7;37m";$merah1="\033[7;31m";$hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";$ungu1="\033[7;35m";$lblue1="\033[7;36m";
$date="Asia/Jakarta : ".date("H:i:s")."  ||  ".date("D, Y-M-d");
$banner=$purple2.$date."\n".$putih1."~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".$hitam."
".$hijau2." ███████████████████".$putih." AUTHOR  : ".$hijau."TubagusSyabani
".$hijau2." █▄─▄██▀▄─██▄─▀█▀─▄█".$putih." TeleID  : ".$biru2."@fifteennv2k
".$hijau2." ██─███─▀─███─█▄█─██".$putih." Twitter : ".$lblue2."@fifteennv2k
".$hijau2." █▄▄▄█▄▄█▄▄█▄▄▄█▄▄▄█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄
".$hijau2." █─▄─▄─█▄─██─▄█▄─▄─▀██▀▄─██─▄▄▄▄█▄─█─▄██▀▄─██
".$hijau2." ███─████─██─███─▄─▀██─▀─██▄▄▄▄─██▄─▄███─▀─██
".$hijau2." ██▄▄▄███▄▄▄▄██▄▄▄▄██▄▄█▄▄█▄▄▄▄▄██▄▄▄██▄▄█▄▄█
".$putih." Note : ".$merah."Script hanya mempermudah proses".$hitam."
".$merah."        segala resiko di tanggung pribadi".$hitam."
".$putih1."~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".$hitam."
".$kuning." Terimakasih telah menggunakan".$hitam."
".$kuning." script Saya.                    ".$hijau2."   #Enjoooy:)".$hitam.$putih2."
".$putih1."~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".$hitam."
".$putih2." ".$hitam.$putih2."
".$putih2."     $lblue1 (FREE) Tools Multi Node AxiomOracle $hitam
".$putih2." ".$hitam.$putih2."
".$putih2.$putih1."~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~".$hitam."
".$putih2;
return $banner;
}

/* ================= FILE ================= */
$walletFile = "wallet.txt";
$proxyFile  = "proxy.txt";

/* ============== MASKWALLET ============== */
function sensor($wallet){

    $front = substr($wallet, 0, 10);
    $back  = substr($wallet, -10);

    return $front . "*****" . $back;
}

/* ================= UTIL ================= */
function readFileList($file){
    if(!file_exists($file)) return [];

    $data = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $data = array_map('trim', $data);

    return array_values(array_filter($data));
}

function saveFileList($file, $data){
    $data = array_map('trim', $data);
    $data = array_filter($data);
    $data = array_values(array_unique($data));

    file_put_contents($file, implode(PHP_EOL, $data));
}

function line(){
    echo "--------------------------------------\n";
}

/* ================= DATABASE ================= */
function getWalletCount(){
    return count(readFileList("wallet.txt"));
}

function getProxyCount(){
    return count(readFileList("proxy.txt"));
}

/* ================= MENU ================= */
function menu(){
$hitam="\033[0;30m"; $abu2="\033[1;30m";               $putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";             $hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";           $biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";             $lblue="\033[0;36m"; $lblue2="\033[1;36m";                                                       $putih1="\033[7;37m";$merah1="\033[7;31m";                                  $hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";                                   $ungu1="\033[7;35m";$lblue1="\033[7;36m";

    $walletCount = getWalletCount();
    $proxyCount  = getProxyCount();
system("clear");
echo banner()."\n";;
    echo $putih2.$lblue1." • Dasboard • $hitam   ".$putih2.$kuning1." Wallet : $walletCount | Proxy : $proxyCount $hitam \n\n";

    echo $putih2.$putih1." 1 ".$hitam." ".$putih2.$hijau1." Start Node ".$hitam."       ";
    echo $putih2.$putih1." 4 ".$hitam." ".$putih2.$hijau1." Hapus wallet ".$hitam."\n\n";
    echo $putih2.$putih1." 2 ".$hitam." ".$putih2.$hijau1." Tambah wallet  ".$hitam."   ";
    echo $putih2.$putih1." 5 ".$hitam." ".$putih2.$hijau1." Hapus Proxy ".$hitam."\n\n";
    echo $putih2.$putih1." 3 ".$hitam." ".$putih2.$hijau1." Tambah Proxy  ".$hitam."    ";
    echo $putih2.$putih1." 0 ".$hitam." ".$putih2.$merah1." Keluar ".$hitam;
    echo $putih2."\n\n Pilih : ";
}

/* ================= WALLET ================= */

function walletnull(){
$hitam="\033[0;30m"; $abu2="\033[1;30m";               $putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";             $hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";           $biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";             $lblue="\033[0;36m"; $lblue2="\033[1;36m";                                                       $putih1="\033[7;37m";$merah1="\033[7;31m";                                  $hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";                                   $ungu1="\033[7;35m";$lblue1="\033[7;36m";
system("clear");
echo banner()."\n"; echo $putih2.$lblue1." • Wallet Kosong • $hitam   ";
echo $putih2.$putih1." 1 ".$hitam." ".$putih2.$hijau1." Tambah Wallet  ".$hitam."    ";
    echo $putih2.$putih1." 0 ".$hitam." ".$putih2.$merah1." Keluar ".$hitam;
    echo $putih2."\n\n Pilih : ";

$input = trim(fgets(STDIN));

if ($input == "1") {
    // tambah wallet
addWallet();
} elseif ($input == "0") {

    menu();

} else {

walletnull();

}

}


function addWallet($file){
$hitam="\033[0;30m"; $abu2="\033[1;30m";               $putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";             $hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";           $biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";             $lblue="\033[0;36m"; $lblue2="\033[1;36m";                                                       $putih1="\033[7;37m";$merah1="\033[7;31m";                                  $hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";                                   $ungu1="\033[7;35m";$lblue1="\033[7;36m";

system("clear");
echo banner()."\n";
    echo $putih2.$lblue1." • Tambah wallet • $hitam \n\n";
    while(true){

        echo $putih2.$putih1." 0 $hitam ".$putih2.$merah1." Kembali $hitam\n\n";;
        echo $putih2." • Masukkan wallet anda: ";
        $w = trim(fgets(STDIN));

        if($w == "0"){
            echo "Kembali ke menu...\n";
            return;
        }

        if($w == ""){

system("clear");
echo banner()."\n";
echo $putih2.$lblue1." • Tambah wallet • $hitam \n\n";
        echo $putih2.$merah1." [?] Gagal!, Tidak boleh kosong! $hitam\n\n";
            continue;
        }

        $list = readFileList($file);

        if(in_array($w, $list, true)){
system("clear");
echo banner()."\n"; $wl=sensor($w);
echo $putih2.$lblue1." • Tambah wallet • $hitam \n\n";
        echo $putih2.$kuning1." [!] Wallet sudah ada! $hitam\n\n";
        echo $putih2." • Wallet : $wl\n\n";
            continue;
        }

        $list[] = $w;
        saveFileList($file, $list);
system("clear");
echo banner()."\n"; $wl=sensor($w);
echo $putih2.$lblue1." • Tambah wallet • $hitam \n\n";
        echo $putih2.$hijau1." [+] Wallet berhasil ditambahkan! $hitam\n\n";
        echo $putih2." • Wallet : $wl\n\n";
    }
}



function deleteWallet($file){
$hitam="\033[0;30m"; $abu2="\033[1;30m";               $putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";             $hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";           $biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";             $lblue="\033[0;36m"; $lblue2="\033[1;36m";                                                       $putih1="\033[7;37m";$merah1="\033[7;31m";                                  $hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";                                   $ungu1="\033[7;35m";$lblue1="\033[7;36m";
    while(true){

        $list = readFileList($file);
        $total = count($list);

$data=file_get_contents("wallet.txt");
system("clear");
echo banner()."\n";;
    echo $putih2.$lblue1." • Hapus Wallet • $hitam   ";

        echo $putih2.$putih1." TOTAL WALLET : $total $hitam\n\n";

        foreach($list as $i => $w){
$wal=sensor($w);
            echo $putih2.$putih1." ".($i+1)." $hitam $putih2$lblue1 $wal $hitam\n\n";
        }

echo $putih2.$putih1." 0 $hitam ".$putih2.$merah1." Kembali $hitam\n\n";;
        echo $putih2." • Pilih nomor wallet: ";

        $n = intval(trim(fgets(STDIN)));
        if($n == '0'){

          return;
        }

        if($n == ""){

system("clear");
echo banner()."\n";
echo $putih2.$lblue1." • Hapus wallet • $hitam \n\n";
        echo $putih2.$merah1." [?] Gagal!, Tidak boleh kosong! $hitam\n\n";
            continue;
        }

        if(!isset($list[$n-1])){
            continue;
        }
        unset($list[$n-1]);
        saveFileList($file, $list);
    }
deleteWallet($file);
}


/* ================= PROXY ================= */
function addProxy($file){
$hitam="\033[0;30m"; $abu2="\033[1;30m";               $putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";             $hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";           $biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";             $lblue="\033[0;36m"; $lblue2="\033[1;36m";                                                       $putih1="\033[7;37m";$merah1="\033[7;31m";                                  $hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";                                   $ungu1="\033[7;35m";$lblue1="\033[7;36m";
system("clear");
echo banner()."\n";
    echo $putih2.$lblue1." • Tambah proxy • $hitam \n\n";
    while(true){
        echo $putih2.$putih1." 0 $hitam ".$putih2.$merah1." Kembali $hitam\n\n";;
        echo $putih2." • Masukkan wallet anda: ";
        $p = trim(fgets(STDIN));
        if($p == "0"){
            echo "Kembali ke menu...\n";
            return;
        }

        if($p == ""){
system("clear");
echo banner()."\n";
echo $putih2.$lblue1." • Tambah wallet • $hitam \n\n";
        echo $putih2.$merah1." [?] Gagal!, Tidak boleh kosong! $hitam\n\n";
            continue;
        }

        $list = readFileList($file);

        if(in_array($p, $list, true)){

system("clear");
echo banner()."\n";
echo $putih2.$lblue1." • Tambah proxy • $hitam \n\n";
        echo $putih2.$kuning1." [!] Proxy sudah ada! $hitam\n\n";
        echo $putih2." • Proxy : $p\n\n";
            continue;
        }

        $list[] = $p;
        saveFileList($file, $list);
system("clear");
echo banner()."\n";
echo $putih2.$lblue1." • Tambah proxy • $hitam \n\n";
        echo $putih2.$hijau1." [+] Proxy berhasil ditambahkan! $hitam\n\n";
        echo $putih2." • Proxy : $p\n\n";


    }
}

function deleteProxy($file){
$hitam="\033[0;30m"; $abu2="\033[1;30m";               $putih="\033[0;37m"; $putih2="\033[1;37m";$merah="\033[0;31m"; $merah2="\033[1;31m";             $hijau="\033[0;32m"; $hijau2="\033[1;32m";$kuning="\033[0;33m"; $kuning2="\033[1;33m";           $biru="\033[0;34m"; $biru2="\033[1;34m";$ungu="\033[0;35m"; $purple2="\033[1;35m";             $lblue="\033[0;36m"; $lblue2="\033[1;36m";                                                       $putih1="\033[7;37m";$merah1="\033[7;31m";                                  $hijau1="\033[7;32m";$kuning1="\033[7;33m";$biru1="\033[7;34m";                                   $ungu1="\033[7;35m";$lblue1="\033[7;36m";
    while(true){

        $list = readFileList($file);
        $total = count($list);

system("clear");
echo banner()."\n";;
    echo $putih2.$lblue1." • Hapus Proxy • $hitam   ";

        echo $putih2.$putih1." TOTAL Proxy : $total $hitam\n\n";

        foreach($list as $i => $w){
            echo $putih2.$putih1." ".($i+1)." $hitam $putih2$lblue1 $w $hitam\n\n";
        }

echo $putih2.$putih1." 0 $hitam ".$putih2.$merah1." Kembali $hitam\n\n";;
        echo $putih2." • Pilih nomor proxy: ";
        $n = intval(trim(fgets(STDIN)));

        if($n == 0){
            echo "Kembali ke menu...\n";
            return;
        }

        if(!isset($list[$n-1])){
            continue;
        }

        unset($list[$n-1]);
        saveFileList($file, $list);
    }
}

/* ================= START NODE (EMPTY) ================= */
function startNode(){

iamtubasya();

}

/* ================= LOOP ================= */
while(true){
    menu();
    $opt = trim(fgets(STDIN));

    switch($opt){

        case 1: startNode(); break;
        case 2: addWallet($walletFile); break;
        case 4: deleteWallet($walletFile); break;

        case 3: addProxy($proxyFile); break;
        case 5: deleteProxy($proxyFile); break;

        case 0:

system("clear");
echo banner()."\n";;
    echo $putih2.$merah1." • KELUAR • $hitam   \n\n";
            exit;

        default:


    }
}
