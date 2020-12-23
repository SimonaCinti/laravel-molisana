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

// HOMEPAGE
Route::get('/', function () {
    $data = config('site-data');
    // dd($data); //log database

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $card){
        
        $card['id'] = $key;

        if($card['tipo'] == 'lunga'){
            $lunghe[] = $card;
        }
        elseif ($card['tipo'] == 'corta'){
            $corte[] = $card;
        }
        elseif ($card['tipo'] == 'cortissima'){
            $cortissime[] = $card;
        }
    }
    // dd($lunghe, $corte, $cortissime); // dd id

    // return view('home', ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime]);
    return view('home', compact('lunghe', 'corte', 'cortissime'));

})->name('home');

// PRODUCT DETAIL PAGE

Route::get('/product/{id}', function($id) {
    // dump($id);

    $data = config('site-data');

    $product = $data[$id];
    $length = count($data) -1;


    return view('product', compact('product', 'length', 'id'));
})->name('product');


// NEWS PAGE
Route::get('/news', function () {
    return view('news');
})->name('news');
