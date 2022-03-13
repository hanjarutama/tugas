<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMBELIAN TIKET</title>
</head>
<body>
    <form action="hitungtiket.php" method="post">
        <label>Kota Tujuan</label>
        <br>
        <input type="radio" id="Jakarta" name="tujuan" value="Jakarta"><label for="Jakarta">Jakarta</label>
        <br>
        <input type="radio" id="Tasikmalaya" name="tujuan" value="Tasikmalaya"><label for="Tasikmalaya">Tasikmalaya</label>
        <br>
        <input type="radio" id="Garut" name="tujuan" value="Garut"><label for="Garut">Garut</label>
        <br>
        <input type="radio" id="Tangerang" name="tujuan" value="Tangerang"><label for="Tangerang">Tangerang</label>
        <br>
        <label for="jumlah_tiket">Input Jumlah Tiket :</label>
        <input type="number" name="jumlah_tiket" id="jumlah_tiket">
        <button type="submit">Pesan</button>
    </form>
</body>
</html>