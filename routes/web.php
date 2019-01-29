<?php

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
    return view('layouts.front');
});

/*Route::get('/', function () {
    return view('layouts.login');
});*/
Route::get('/register', function () {
    return redirect('front');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', 'FrontendController@about');
Route::get('/front', 'FrontendController@front');
Route::get('/blog', 'FrontendController@blog');
Route::get('/singleblog/{id}', 'FrontendController@singleblog');
Route::get('/produk', 'FrontendController@produk');
Route::get('/detailpro/{id}', 'FrontendController@detailpro');
Route::get('/kontak', 'FrontendController@kontak');
Route::get('/galeri', 'FrontendController@galeri');
Route::get('/mitrakerja', 'FrontendController@mitrakerja');





Route::group(['prefix'=> 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::resource('kategori','KategorisController');
    Route::resource('barang','BarangsController');
    Route::resource('tentang','TentangsController');
    Route::resource('artikel','ArtikelsController');
    Route::resource('galeri','GalerisController');
    Route::resource('testimoni','TestimonisController');
    Route::resource('mitrakerja','MitraKerjaController');
    Route::resource('kategoriartikel','KategoriArtikelsController');
    Route::resource('tag','TagController');
});
Route::get('/contact', function () {
    return view('frontends.contact');
});

Route::get('/kategori_barang/{id}','FrontController@filter_barang');

Route::post('/artikels/{publish}','ArtikelsController@Publish')->name('artikels.publish');
Route::get('/artikels/single/{artikels}','ArtikelsController@singleblog')->name('singleblog');


