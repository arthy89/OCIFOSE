<?php

use App\Http\Controllers\ProfileController;
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
    return redirect()->route('login');
});

// Route::get('/fose', function () {
//     return view('fose');
// })->middleware(['auth', 'verified'])->name('fose');

// para redirigir a la fuerza xd
Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/buscar', function () {
    return view('buscar');
})->middleware(['auth', 'verified'])->name('buscar');

// Route::get('/pruebas', function () {
//     return view('pruebas');
// })->middleware(['auth', 'verified'])->name('pruebas');

// registrar fose
Route::get('/fose', [App\Http\Controllers\RemitenteController::class, 'fose'])->name('fose');
// Route::get('pruebas', [RemitenteController::class, 'pruebas']);
Route::get('/pruebas', [App\Http\Controllers\RemitenteController::class, 'pruebas'])->name('pruebas');
// para ver los detalles del remitente
Route::get('/detalles/{remitente_}', [App\Http\Controllers\RemitenteController::class, 'detalles'])->name('detalles');
// para editar los datos del remitente
Route::get('/remitente/{rem_edit}/edit', [App\Http\Controllers\RemitenteController::class, 'editrem'])->name('edit');
// para actualizar
Route::put('/detalles/{rem_up}', [App\Http\Controllers\RemitenteController::class, 'update'])->name('update');
// para mandar nuevo remitente
Route::post('/enviarem', [App\Http\Controllers\RemitenteController::class, 'enviar'])->name('enviar_rem');
// para eliminar registro remitente
Route::delete('/remitente/{remitente}', [App\Http\Controllers\RemitenteController::class, 'destroy'])->name('destro_rem');


// ? REGISTROS

Route::get('/registros', [App\Http\Controllers\RegRemitenteController::class, 'index'])->name('registros');

// ?

// Route::get('/registros', [App\Http\Controllers\RemitenteController::class, 'fose'])->name('fose');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
