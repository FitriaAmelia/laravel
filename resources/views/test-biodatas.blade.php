<html>
     <head>
    <title></title>
    </head>
    <body>
                <center><h1>Data Biodata</h1><hr><br>
                 <table border="1">

                    <tr>
                        <td>Nama</td>
                        <td>Tanggal lahir</td>
                        <td>Jenis Kelamin</td>
                        <td>Alamat</td>
                        <td>Agama</td>
                        <td>Umur</td>
                        <td>Hobi</td>
                    </tr>
                    <tr>
                 @foreach ($query as $item)
                <td>{{$item->name}}</td>
                <td>{{$item->bornDate}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->religion}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->hobby}}</td><tr>
                </tr>
                @endforeach
                 </tr>
                </table>
</center>
      </body>
      </html>



