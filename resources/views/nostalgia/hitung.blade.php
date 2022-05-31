<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menghitung Kredit</title>
</head>
<body>
    <form action="nostalgia.hasil" method="post">
        @csrf
        <table>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td>bunga</td>
                <td><input type="text" name="bunga"></td>
            </tr>
            <tr>
                <td>jangka waktu</td>
                <td><input type="text" name="lama"></td>
            </tr>
        </table>
        <button>hitung</button>
    </form>
</body>
</html>