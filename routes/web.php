<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pembuka', function () {
    return view('amel/pembuka');
});

Route::get('/biodata', function () {
    return view('amel/biodata');
});

Route::get('/sahabat', function () {
    return view('amel/sahabat');
});

Route::get('/motivasi', function () {
    return view('amel/motivasi');
});

Route::get('/mimpi', function () {
    return view('amel/mimpi');
});

Route::get('/tugas', function () {
    return view('amel/tugas');
});

Route::get('page/{page?}', function ($hal = 2) {
    return "Halaman <b>$hal</b>";
});

Route::get('user/{name?}', function ($nama = "Hello world!") {
    return "<b>$nama</b>";
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman <br>
                Anda memesan Cemilan = $cemilan";
    } else if ($makanan && $minuman != null) {
        return "Anda memesan Makanan = $makanan <br>
                Anda memesan Minuman = $minuman";
    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda memesan makanan : $makanan" : "Anda memesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
    }

});

Route::get('profile', function () {
    $nama = "Abdul";
    return view('profile', compact('nama'));
});

Route::get('biodata', function () {
    //Nama, Umur, Alamat,
    $nama = "Amel";
    $umur = "17";
    $alamat = "Jl.Sadang Pesantren";
    $sekolah = "SMK ASSALAAM Bandung";
    $kelas = "12 RPL 2";
    $hobi = "Membaca";

    return view('biodata', compact('nama', 'umur', 'alamat', 'sekolah', 'kelas', 'hobi'));

});

Route::get('blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
    ];

    return view('blog', compact('posts'));
});

Route::get('mapel', function () {
    $mapel = [
        ['id' => '1',
            'name' => 'Amel',
            'username' => 'Fitria_Amelia',
            'email' => 'amel@gmail.com',
            'alamat' => 'sadang pesantren',
            'mataPelajaran' => [
                'mapel1' => 'Matematika',
                'mapel2' => 'Fisika',
                'mapel3' => 'Kimia',
            ],
        ],
        ['id' => '2',
            'name' => 'Dian',
            'username' => 'Dian_baiq',
            'email' => 'dian@gmail.com',
            'alamat' => 'sadang pasantren',
            'mataPelajaran' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Bahasa Inggris',
                'mapel3' => 'Bahasa Indonesia',
            ],
        ],
        ['id' => '3',
            'name' => 'Dina',
            'username' => 'Dina_Amelia',
            'email' => 'dina@gmail.com',
            'alamat' => 'bbk nugraha',
            'mataPelajaran' => [
                'mapel1' => 'Bahasa Indonesia',
                'mapel2' => 'Kimia',
                'mapel3' => 'Matematika',
            ],
        ],
        ['id' => '4',
            'name' => 'key',
            'username' => 'kesyza',
            'email' => 'key@gmail.com',
            'alamat' => 'rancamanyar',
            'mataPelajaran' => [
                'mapel1' => 'Agama',
                'mapel2' => 'Kimia',
                'mapel3' => 'Matematika',
            ],
        ],
        ['id' => '5',
            'name' => 'erin',
            'username' => 'erinraff',
            'email' => 'erin@gmail.com',
            'alamat' => 'raja pancing',
            'mataPelajaran' => [
                'mapel1' => 'Agama',
                'mapel2' => 'Bahasa Indonesia',
                'mapel3' => 'Kimia',
            ],
        ],
    ];
    return view('mapel', compact('mapel'));
});

// check record baru di database

Route::get('/test-post', function () {
    $data = App\Models\Post::all();
    return view('test-post', compact('data'));
});

Route::get('/biodatas', function () {
    $query = App\Models\biodatas::all();
    return $query;
});

Route::get('/test-biodatas', function () {
    $query = App\Models\biodatas::all();
    return view('test-biodatas', compact('query'));
});

Route::get('/postcontrol', [CobasController::class, 'index']);

Route::get('/controlpost', [PostController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barangs', [BarangController::class, 'barangs']);

Route::get('/pesanans', [BarangController::class, 'pesanans']);

Route::get('/pembelians', [BarangController::class, 'pembelians']);

Route::get('/pembelis', [BarangController::class, 'pembelis']);

Route::get('/suplier', [BarangController::class, 'suplier']);
