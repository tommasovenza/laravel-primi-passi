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

// a quali url il mio sito risponde con un contenuto??? in questo caso solo l'homepage
// qualsiasi altra rotta che non sia qui gestita, se le richiamo, avrò l'errore 404, pagina non trovata!

// route fondamentalmente è una classe. come se fosse un oggetto javascript
// get è il metodo che utilizziamo per far vedere la nostra route (metodo standard di quando navighiamo sul web)

// il primo parametro che passiamo alla funzione get è un url ->(a quale url devo rispondere) il secondo parametro è con cosa devo rispondere

// route dell'homepage la mettiamo per prima come convenzione
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home_page_laravel', function () {
    return view('home');
})->name('home');

Route::get('/privacy-policy', function () {
    return view('pp');
})->name('privacy');







