<?php

$conn = mysqli_connect('localhost', 'root', '', 'galangdana');

function query( $query ){
    global $conn;
    $array = mysqli_query($conn, $query);
    $return= [];

    while($data = mysqli_fetch_assoc($array)){
        $return[] = $data;
    }

    return $return;
}

function tambahNominal($name, $tanggal, $catatan,  $nominal){
    global $conn;

    $query = "call tambahNominal('$name', '$tanggal', '$catatan', $nominal)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahPengeluaran($name, $tanggal, $catatan,  $nominal){
    global $conn;

    $query = "call tambahPengeluaran('$name', '$tanggal', '$catatan', $nominal)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function totalKeuangan(){
    $datas = query("SELECT nominal FROM data");
    $pengeluarans = query("SELECT nominal FROM pengeluaran");
    $total = 0;
    
    for ($i=0; $i < count($datas); $i++) { 
        $total += $datas[$i]['nominal'];
    }
    
    for ($i=0; $i < count($pengeluarans); $i++) { 
        $total -= $pengeluarans[$i]['nominal'];
    }

    return $total;
}

function formatTanggal($tanggal){
    $bulan = [
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];

    $arr = explode('-', $tanggal);

    return $arr[2] . ' ' .$bulan[ (int)$arr[1] ]. ' '.$arr[0];
}

?>