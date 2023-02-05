<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Route::controller(TestController::class)->group(callback: function (){
//
//    //bunlari normalde heryerde kullabirlirz ancak bunlara name vererek her yerde kullanilmasini saglayabiliriz
//
//
//    Route::get('/deneme','test')->name('test');
//    Route::get('/detail','detail')->name('detail');
//
//});

//prefix ozelligi vermek gerekebilir mesela admin yazalim
Route::prefix('admin')->middleware('auth')->group(function (){

        //oturum kontrolu yapmak icin middleware outh kontrolu yapalim

        Route::get('deneme',[TestController::class,'test'])->name('test');
        Route::get('detail',[TestController::class,'detail'])->name('detail');
});

Route::prefix('kitap')->middleware('auth')->group(function (){

    //oturum kontrolu yapmak icin middleware outh kontrolu yapalim

    Route::get('/kitaplar',[bookController::class,'index'])->name('books.index');
    Route::get('/kitaplar/ekle',[bookController::class,'create'])->name('books.create');
    Route::post('/kitaplar/ekle',[bookController::class,'store'])->name('books.store');
    Route::get('/kitaplar/{id}',[bookController::class,'edit'])->name('books.edit');
    Route::post('/kitaplar/{id}',[bookController::class,'update'])->name('books.update');
    Route::get('/kitaplar/sil/{id}',[bookController::class,'delete'])->name('books.delete');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
