<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Kumpulan Data Suplier</h1></center>
    <table border="1" align="center">
        <tr>
            <td>Id Suplier</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Kode Pos</td>
            <td>Kota</td>


        </tr>
     @foreach ($suplier as $item)
        <tr align="center">
            <td>{{$item->id_suplier}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kode_pos}}</td>
            <td>{{$item->kota}}</td>
        </tr>
         @endforeach
 </table>
</body>
</html>
