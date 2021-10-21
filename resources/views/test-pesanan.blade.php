<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Kumpulan Data Pesanan</h1></center>
    <table border="1" align="center">
        <tr>
            <td>Id Pesanan</td>
            <td>Nama Pelanggan</td>
            <td>Nama Barang</td>
            <td>Quantyty</td>
            <td>Tanggal Pesan</td>

        </tr>
     @foreach ($pesanan as $item)
        <tr align="center">
            <td>{{$item->id_pesanan}}</td>
            <td>{{$item->nama_pelanggan}}</td>
           <td>{{$item->nama_barang}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->tgl_pesan}}</td>
        </tr>
         @endforeach
 </table>
</body>
</html>
