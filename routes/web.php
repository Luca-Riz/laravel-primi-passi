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

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/dati', function () {
    $data = [
        'title' => 'pagina dati',
        'arrayProva' => ['cane','topo','gatto', 'mio ciggino quel bue', 'oca']
    ];
    return view('dati', $data);
})->name('dati');

Route::get('/aspettative', function () {
    $data = [
        'title' => 'Aspettative Laravel',
        'paragrafo' => 'So di portarmi sfortuna da solo, ogni volta che dico certe cose, poi mi si ritorcono contro, ma voglio farlo lo stesso.',
        'paragrafo2' => 'Secondo me Laravel ci fará dannare, ma allo stesso tempo ci dará grandi soddisfazioni.',
        'paragrafo3' => 'Con il "ci fará dannare", ho voluto mettere per iscritto il gesto fisico che si farebbe se si deve dire qualcosa ma non si vuole sfortuna... ;-)'
    ];
    return view('aspettative', $data);
    })->name('aspettative');
