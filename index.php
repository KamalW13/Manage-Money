<?php

include 'function.php';

$datas = query("SELECT tanggal FROM data ORDER BY tanggal DESC");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

</head>

<body>
    <section>
        <nav>
            <img src="remila.png" alt="">
        </nav>

        <div class="content">
            <span class="total">TOTAL</span>
            <div class="circle">
                Rp. <?= ' '.number_format(totalKeuangan()); ?>
            </div>

            

            <div class="last-update">
                <span class="terakhir">Terakhir Ditambah Tanggal</span>
                <span class="tanggal"> <?= formatTanggal($datas[0]['tanggal']); ?> </span>
            </div>
        </div>

        <div class="absolute">
            <div class="menu">
                <a href="" class="history">
                    <div class="icon-history">
                        <i class="fa-regular fa-folder satu"></i>
                        <i class="fa-solid fa-folder dua"></i>
                    </div>
                    Riwayat Keuangan
                </a>
                <a href="kurang.php" class="output">
                    <i class="fa-solid fa-right-from-bracket"></i> Keluarkan Pendapatan
                </a>
                <a href="tambah.php" class="input">
                    <i class="fa-solid fa-right-to-bracket"></i> Tambah Pendapatan
                </a>
            </div>
        </div>

    </section>
</body>

</html>