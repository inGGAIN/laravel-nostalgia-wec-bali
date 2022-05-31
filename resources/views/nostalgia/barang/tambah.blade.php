<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>input barang</title>
</head>

<body>
    <form action="{{ route('barang.simpan') }}" method="post">
        <table>
            <tr>
                <td>nama barang</td>
                <td><input type="text" name="barang" autocomplete="off" value="{{ old('barang') }}"></td>
            </tr>
            <tr>
                <td>merek</td>
                <td><input type="text" name="merek" autocomplete="off" value="{{ old('merek') }}"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah" autocomplete="off" value="{{ old('jumlah') }}"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" autocomplete="off" value="{{ old('harga') }}"></td>
            </tr>
            <tr>
                <td>tanggal masuk</td>
                <td><input type="text" name="tgl_masuk" autocomplete="off" value="{{ old('tgl_masuk') }}"></td>
            </tr>
            <tr>
                <td>deskripsi</td>
                <td><input type="text" name="deskripsi" autocomplete="off" value="{{ old('deskripsi') }}"></td>
            </tr>
        </table>
        <button>simpan</button>
    </form>
</body>

</html>
