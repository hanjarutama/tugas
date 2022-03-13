<?php

$tujuan = $_POST['tujuan'];
$jumlah = $_POST['jumlah'];

$harga = HargaAwal($tujuan);
$hargatotal = $harga * $jumlah;

echo "Tujuan = " . $tujuan, "<br>";
echo "Harga = Rp. " . $harga, "<br>";
echo "Jumlah Tiket = " . $jumlah, " pcs<br>";
$diskon = HargaDiskon($jumlah, $hargatotal);
echo "Total Harga = Rp. " . $hargatotal, "<br>";
$hargaakhir = $hargatotal - $diskon;
echo "Total Harga Setelah Diskon = Rp. " . $hargaakhir, "<br>";

function HargaAwal($tujuan)
{
    switch ($tujuan) {
        case "Jakarta":
            $harga = 100000;
            break;
        case "Tasikmalaya":
            $harga = 60000;
            break;
        case "Garut":
            $harga = 70000;
            break;
        case "Tangerang":
            $harga = 110000;
            break;
        default:
            break;
    }
    return $harga;
}
function HargaDiskon($jumlah, $hargatotal)
{
    if ($jumlah >= 10) {
        $diskon = $hargatotal * 0.2;
        echo "Diskon 20% = " . $diskon, "<br>";
    } elseif ($jumlah >= 5) {
        $diskon = $hargatotal * 0.15;
        echo "Diskon 15% = " . $diskon, "<br>";
    } elseif ($jumlah >= 3) {
        $diskon = $hargatotal * 0.1;
        echo "Diskon 10% = " . $diskon, "<br>";
    } else {
        $diskon = 0;
        echo "Diskon 0% = " . $diskon, "<br>";
    }
    return $diskon;
}