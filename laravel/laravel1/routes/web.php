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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/teste', function () {
//     return view('teste');
// });

// Redirecionamento
// Route::redirect('/', '/teste');

// Rotas com sintaxe resumidas
// Route::view('/', 'welcome');
Route::get('/', 'HomeController');
Route::view('/teste', 'teste');

// Utilizando query params
Route::get('/noticia/{slug}', function($slug) {
    echo 'SLUG: ' . $slug;
});

Route::get('/noticia/{slug}/comentario/{id}', function($slug, $id) {
    echo 'Mostrando o comentário ' . $id . ' da notícia ' . $slug;
});

// Validando query params
Route::get('/user/{id}', function($id) {
    echo 'Usuário ID: ' . $id;
})->where('id', '[\d]+');  // Outra forma de fornecer padrão para o tipo de
                           // parâmetro enviado é configurando ele no endereço
                           // ./app/Providers/RouteServiceProvider.php


// Grupos de rotas
// Route::prefix('/config')->group(function() {

//     Route::get('/', function() {
//         // Montando URLS a partir da nomeação de uma rota
//         $link_info = route('info');
//         $link_permissoes = route('permissoes');

//         echo "<a href='$link_info'>INFO</a>";
//         echo '<br>';
//         echo "<a href='$link_permissoes'>PERMISSOES</a>";

//         // Redirecionamento de dentro da requisição
//         // return redirect()->route('info');

//         return view('config');
//     });

//     Route::get('info', function() {
//         echo 'CONFIGURAÇÕES: info';
//     })->name('info'); // Rotas nomeadas

//     Route::get('permissoes', function() {
//         echo 'CONFIGURAÇÕES: permissões';
//     })->name('permissoes'); // Rotas nomeadas
// });

// Mesmo código acima mas usando Controllers
Route::prefix('/config')->group(function() {

    Route::get('/', 'Admin\ConfigController@index');  // Uso de namespace
    Route::get('info', 'Admin\ConfigController@info')->name('info');
    Route::get('permissoes', 'Admin\ConfigController@permissoes')->name('permissoes');
});


// Se nenhuma rota bater, vai cair nessa rota (de fallback);
Route::fallback(function() {
    return view('404');
});
