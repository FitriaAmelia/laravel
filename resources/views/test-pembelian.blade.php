<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Kumpulan Data Pembeli</h1></center>
    <table border="1" align="center">
        <tr>
            <td>Id Pembelian</td>
            <td>Nama Barang</td>
            <td>Nama Suplier</td>
            <td>Quantyty</td>
            <td>Tanggal</td>


        </tr>
     @foreach ($pembelian as $item)
        <tr align="center">
            <td>{{$item->id_pembelian}}</td>
            <td>{{$item->nama_barang}}</td>
            <td>{{$item->nama_suplier}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->tgl}}</td>
        </tr>
         @endforeach
 </table>
</body>
</html>
