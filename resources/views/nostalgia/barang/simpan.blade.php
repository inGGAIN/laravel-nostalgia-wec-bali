<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang Tersimpan</title>
</head>

<body>
    <table>
        <tr>
            <td>barang</td>
            <td>: <?= $barang ?></td>
        </tr>
        <tr>
            <td>barang</td>
            <td>: <?= $merek ?></td>
        </tr>
        <tr>
            <td>barang</td>
            <td>: <?= $jumlah ?></td>
        </tr>
        <tr>
            <td>harga</td>
            <td>: Rp. <?= number_format($harga, 2, ',', '.') ?></td>
        </tr>
        <tr>
            <td>tanggal masuk</td>
            <td>: <?= $tgl_masuk ?></td>
        </tr>
        <tr>
        <tr>deskripsi</tr>
        <tr>: <?= $deskripsi ?></tr>
        </tr>
    </table>
</body>

</html>
