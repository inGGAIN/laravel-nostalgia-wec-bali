<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Kredit</title>
</head>

<body>

    <table>
        <tr>
            <td>nama</td>
            <td><?= $nama ?></td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>jumlah</td>
            <td><?= number_format($jumlah, 2, ',', '.') ?></td>
            <td><input type="text" name="jumlah"></td>
        </tr>
        <tr>
            <td>bunga</td>
            <td><?= $bunga ?></td>
            <td><input type="text" name="bunga"></td>
        </tr>
        <tr>
        <tr>
            <td>angsuran</td>
            <td>: <?= number_format($angsuran) ?></td>
        </tr>
        </tr>
    </table>
</body>

</html>
