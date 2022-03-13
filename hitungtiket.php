git branch<?php

$tujuan = $_POST['tujuan'];
$jum_tiket = $_POST['jumlah_tiket'];

$harga = patokHarga($tujuan);
$hargatotal = $harga * $jum_tiket;

echo "Tujuan = " . $tujuan, "<br>";
echo "Harga = " . $harga, "<br>";
echo "Jumlah Tiket = " . $jum_tiket, "<br>";
$diskon = patokDiskon($jum_tiket, $hargatotal);
echo "Total Harga Tiket = " . $hargatotal, "<br>";
$hargaakhir = $hargatotal - $diskon;
echo "Total Bayar = " . $hargaakhir, "<br>";

function patokHarga($tujuan)
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
function patokDiskon($jum_tiket, $hargatotal)
{
    if ($jum_tiket >= 10) {
        $diskon = $hargatotal * 0.2;
        echo "Diskon 20% = " . $diskon, "<br>";
    } elseif ($jum_tiket >= 5) {
        $diskon = $hargatotal * 0.15;
        echo "Diskon 15% = " . $diskon, "<br>";
    } elseif ($jum_tiket >= 3) {
        $diskon = $hargatotal * 0.1;
        echo "Diskon 10% = " . $diskon, "<br>";
    } else {
        $diskon = 0;
        echo "Diskon 0% = " . $diskon, "<br>";
    }
    return $diskon;
}