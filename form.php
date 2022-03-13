<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TIKET TERMINAL LEUWI PANJANG</title>
</head>
<body>
    <form action="hitung.php" method="post">
        <label>Pilih Kota Tujuan</label>
        <br>
        <input type="radio" id="Jakarta" name="tujuan" value="Jakarta"><label for="Jakarta">Jakarta</label>
        <br>
        <input type="radio" id="Tasikmalaya" name="tujuan" value="Tasikmalaya"><label for="Tasikmalaya">Tasikmalaya</label>
        <br>
        <input type="radio" id="Garut" name="tujuan" value="Garut"><label for="Garut">Garut</label>
        <br>
        <input type="radio" id="Tangerang" name="tujuan" value="Tangerang"><label for="Tangerang">Tangerang</label>
        <br><br>
        <label for="jumlah">Masukan Jumlah Tiket :</label><br>
        <input type="number" name="jumlah" id="jumlah">
        <br><br>
        <button type="submit">Pesan</button>
    </form>
</body>
</html>