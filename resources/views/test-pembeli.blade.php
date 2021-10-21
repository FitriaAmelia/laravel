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
            <td>Id Pembeli</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Kode Pos</td>
            <td>Kota</td>
            <td>Tanggal Lahir</td>


        </tr>
     @foreach ($pembeli as $item)
        <tr align="center">
            <td>{{$item->id_pembeli}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->jns_kelamin}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->kode_pos}}</td>
            <td>{{$item->kota}}</td>
            <td>{{$item->tgl_lahir}}</td>

        </tr>
         @endforeach
 </table>
</body>
</html>
