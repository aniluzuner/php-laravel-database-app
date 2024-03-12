<?php

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



Route::middleware(['auth'])->group(function () {
  Route::get('/','App\Http\Controllers\MainController@index');

  Route::group(['prefix' => 'calisanlar'], function(){
    // EKLE FORM SAYFA
    Route::get('/ekle', function(){
      return view('CalisanEkle');
    });

    //TABLO SAYFASI
    Route::get('/','App\Http\Controllers\MainController@CalisanListe')->name('calisanlar');

    //EKLE POST VERİTABANI KAYIT
    Route::post('/post','App\Http\Controllers\MainController@CalisanPost');

    //DUZENLE FORM VE POST VERİTABANI KAYIT
    Route::get('/duzenle/{id}','App\Http\Controllers\MainController@CalisanDuzenle');
    Route::post('/post/{id}','App\Http\Controllers\MainController@CalisanGuncelle');

    //SİL
    Route::get('/sil/{id}','App\Http\Controllers\MainController@CalisanSil');
  });

  Route::group(['prefix' => 'musteriler'], function(){
    // EKLE FORM SAYFA
    Route::get('/ekle', function(){
      return view('MusteriEkle');
    });

    //TABLO SAYFASI
    Route::get('/','App\Http\Controllers\MainController@MusteriListe')->name('musteriler');

    //EKLE POST VERİTABANI KAYIT
    Route::post('/post','App\Http\Controllers\MainController@MusteriPost');

    //DUZENLE FORM VE POST VERİTABANI KAYIT
    Route::get('/duzenle/{id}','App\Http\Controllers\MainController@MusteriDuzenle');
    Route::post('/post/{id}','App\Http\Controllers\MainController@MusteriGuncelle');

    //SİL
    Route::get('/sil/{id}','App\Http\Controllers\MainController@MusteriSil');
  });

  Route::group(['prefix' => 'araclar'], function(){

    // EKLE FORM SAYFA
    Route::get('/ekle', function(){
      return view('AracEkle');
    });

    //TABLO SAYFASI
    Route::get('/','App\Http\Controllers\MainController@AracListe')->name('araclar');

    //EKLE POST VERİTABANI KAYIT
    Route::post('/post','App\Http\Controllers\MainController@AracPost');

    //DUZENLE FORM VE POST VERİTABANI KAYIT
    Route::get('/duzenle/{id}','App\Http\Controllers\MainController@AracDuzenle');
    Route::post('/post/{id}','App\Http\Controllers\MainController@AracGuncelle');

    //SİL
    Route::get('/sil/{id}','App\Http\Controllers\MainController@AracSil');
  });
});

require __DIR__.'/auth.php';
