<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\GraphismeController;
use App\Http\Controllers\ConnexionController;

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




Route::get('/user', function () {
    return view('profil.userspace'); 
});

Route::get('/connexion', function () {
    return view('auth.login');
});


Route::controller(ConnexionController::class)->group(function () {
    Route::get('/connexionPage', 'index');
    Route::get('/inscriptionPage', 'create');
    // utilise middleware
    Route::post('/connexion', 'store');

    Route::post('/modificationUtilisateur', 'update');
    Route::post('/suppressionUtilisateur', 'create');
    Route::get('/listeUtilisateur/{id}', 'show');

});

Route::post('inscription/store',   [ConnexionController::class, 'store2']);

Route::controller(ProjetController::class)->group(function () {
    Route::get('/addProjet', 'index');
    Route::post('/projetStore', 'store');
    Route::post('/delectprojet', 'delete');

});

Route::controller(TacheController::class)->group(function () {
    Route::get('/addTache', 'index');
    Route::post('/tacheStore', 'store');
    Route::post('/delectetache', 'delete');

});