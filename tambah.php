<?php

include 'function.php';

if (isset($_POST['submit'])) {
    var_dump($_POST);
    exit;
    $name = $_POST['name'];
    $tanggal = $_POST['tanggal'];
    $catatan = $_POST['catatan'];
    $nominal = $_POST['nominal-input'];

    if(tambahNominal($name, $tanggal, $catatan, $nominal) >= 1){
        header("Location: index.php");
    } else {
        echo "<script> alert('Ada yang salah'); </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style-tambah.css">
</head>

<body>
    <nav>
        <div class="gambar">
            <img src="remila.png" alt="">
        </div>

        <span>
            Tambah Pendapatan
        </span>
    </nav>

    <section>
        <form action="" method="post">
            <div class="form-satu">
                <input type="text" name='name' placeholder="Nama" required>
            </div>

            <div class="form-dua">
                <input type='date' name='tanggal' placeholder='Tanggal' class="tanggal" required>

                <textarea name="catatan" id="" rows="9" placeholder="Catatan" required></textarea>

                <div class="nominal-input">
                    <span>Rp</span>
                    <input required name='nominal-input' autocomplete="off" type='text' id="input_nominal" placeholder='Nominal'>
                </div>

                <div class="total">
                    <span>Total <br> Pendapatan <br> Sebelumnya</span>
                    <div class="total-number">
                        <span class="number_total"> <?= number_format($total); ?> </span>
                    </div>
                </div>
            </div>

            <div class="button">
                <a href="index.php">Kembali</a>
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </section>
</body>

</html>