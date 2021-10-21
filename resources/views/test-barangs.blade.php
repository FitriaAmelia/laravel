<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Kumpulan Data Barang</h1></center>
    <table border="1" align="center">
        <tr>
            <td>Id Barang</td>
            <td>Nama</td>
            <td>Varian</td>
            <td>Harga Beli</td>
            <td>Harga Jual</td>

        </tr>
     @foreach ($barang as $item)
        <tr align="center">
            <td>{{$item->id_barang}}</td>
            <td>{{$item->nama}}</td>
           <td>{{$item->varian}}</td>
            <td>{{$item->harga_beli}}</td>
            <td>{{$item->harga_jual}}</td>
        </tr>
         @endforeach
 </table>
</body>
</html>
