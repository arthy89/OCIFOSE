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
// Route::get('/fose', [App\Http\Controllers\RemitenteController::class, 'fose'])->name('fose');
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
// para visualizar todos los registros ingresados
Route::get('/registros', [App\Http\Controllers\RegRemitenteController::class, 'index'])->name('registros');
// para registrar nuevo registro con remitente
Route::get('/registro_remitente', [App\Http\Controllers\RegRemitenteController::class, 'create'])->name('registrar_nuevo_remitente');
// para guardar
Route::post('/guardar', [App\Http\Controllers\RegRemitenteController::class, 'store'])->name('store');
// para editar registro
Route::get('/registro/{registro}/edit', [App\Http\Controllers\RegRemitenteController::class, 'edit'])->name('editar_registro');
Route::put('/registro/{registro}', [App\Http\Controllers\RegRemitenteController::class, 'update'])->name('actualizar_registro');
Route::delete('/registro/{registro}', [App\Http\Controllers\RegRemitenteController::class, 'destroy'])->name('eliminar_registro');
// ?

//!  ACCION
Route::get('/accion/{registro}', [App\Http\Controllers\AccionesController::class, 'show'])->name('accion');
// generar pdf
Route::get('/accion/{registro}/generar_pdf_inf', [App\Http\Controllers\AccionesController::class, 'generar_pdf_inf'])->name('generar_pdf_inf');

Route::get('/accion/{registro}/recuperar_pdf_inf/{informe}', [App\Http\Controllers\AccionesController::class, 'recuperar_pdf_inf'])->name('recuperar_pdf_inf');

Route::get('/accion/{registro}/generar_pdf_ofi', [App\Http\Controllers\AccionesController::class, 'generar_pdf_ofi'])->name('generar_pdf_ofi');

Route::get('/accion/{registro}/recuperar_pdf_ofi/{oficio}', [App\Http\Controllers\AccionesController::class, 'recuperar_pdf_ofi'])->name('recuperar_pdf_ofi');

Route::get('/accion/{registro}/generar_fose', [App\Http\Controllers\AccionesController::class, 'generar_fose'])->name('generar_pdf_fose');

Route::get('/accion/{registro}/recuperar_pdf_fose/{fose}', [App\Http\Controllers\AccionesController::class, 'recuperar_pdf_fose'])->name('recuperar_pdf_fose');
//! 


// TODO/ INFORME
Route::get('/accion/informe/{registro}', [App\Http\Controllers\InformeController::class, 'create'])->name('crear_inf');
Route::post('accion/informe/guardar/{registro}', [App\Http\Controllers\InformeController::class, 'store'])->name('generar_inf');
// todo

// ? OFICIO 
Route::get('/accion/oficio/{registro}', [App\Http\Controllers\OficioController::class, 'create'])->name('crear_ofi');
Route::post('accion/oficio/guardar/{registro}', [App\Http\Controllers\OficioController::class, 'store'])->name('generar_ofi');
// ?

// ! FOSE 
Route::get('/accion/fose/{registro}', [App\Http\Controllers\FoseController::class, 'create'])->name('crear_fose');
Route::post('accion/fose/guardar/{registro}', [App\Http\Controllers\FoseController::class, 'store'])->name('generar_fose');
// !


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
