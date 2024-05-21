<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RegistroPersonalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginClientesController;
use App\Http\Controllers\RegistroClientesController;
use App\Http\Controllers\SolicitudServicioController;
use App\Http\Controllers\EspecimenController;
use App\Http\Controllers\ClienteEnsayosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\DocumentoController;





Route::get('/', function () {
    return view('pagInicio');
});

Route::get('/principal', function () {
    return view('pagInicio');
});

Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/responsableLIEE', function () {
    return view('Encargado_LIEE.responsableLIEE');
})->name('responsableLIEE');

Route::get('/login-error', function () {
    return view('login-error');
})->name('login-error');






Route::get('/seguimiento', 'App\Http\Controllers\SeguimientoController@index')->name('seguimiento');







Route::get('/encuesta', function () {
    return view('encuesta');
});

Route::get('/registroPersonal', function () {
    return view('registroPersonal');
});

Route::post('/registroPersonal', [RegistroPersonalController::class, 'registro'])->name('registroPersonal');


//Route::get('/loginClientes', [LoginClientesController::class, 'showLoginForm'])->name('loginClientes');
//Route::post('/loginClientes', [LoginClientesController::class, 'login']);

Route::get('/personal', [RegistroPersonalController::class, 'personal']);
Route::put('/personal/{id_personal}', [RegistroPersonalController::class, 'update'])->name('personal.update');
Route::post('/personal', [RegistroPersonalController::class, 'store'])->name('personal.store');
Route::get('/registro', [RegistroPersonalController::class, 'showRegistroForm'])->name('registro');
Route::delete('/personal/{personal}', [RegistroPersonalController::class, 'destroy'])->name('personal.destroy');




Route::get('/cliente', [UsuarioController::class, 'index']);
Route::put('/clientes/{cliente}', [UsuarioController::class, 'update'])->name('clientes.update');
Route::post('/clientes', [UsuarioController::class, 'store'])->name('clientes.store');
Route::delete('/cliente/{id}', [UsuarioController::class,'destroy'])->name('cliente.destroy');


Route::get('/registroCliente', [RegistroClientesController::class, 'showRegistroForm'])->name('registroCliente');
Route::post('/registroCliente', [RegistroClientesController::class, 'registro'])->name('registroCliente');

Route::get('/especimen', [EspecimenController::class, 'especimen2']);
Route::put('/especimen/{especimen}', [EspecimenController::class, 'update'])->name('especimen2.update');
Route::get('/especimen/{id_especimen}', [EspecimenController::class, 'show'])->name('especimen.show');

Route::get('/solicitud', [SolicitudController::class, 'solicitud'])->name('solicitud.index');
Route::put('/solicitud/{id_solicitud}', [SolicitudController::class, 'update'])->name('solicitud.update');
Route::get('/solicitud_s',[ClienteController::class, 'cliente']);
Route::get('/consulta_solicitud/{id_cliente}', [SolicitudController::class, 'seguimiento_solicitud'])->name('solicitud.consulta');

Route::get('/servicio', [ServicioController::class, 'servicio']);
Route::put('/servicio/{id_servicio}', [ServicioController::class, 'update'])->name('servicio.update');
Route::delete('/servicio/{id_servicio}', [DocumentoController::class, 'destroy'])->name('servicio.destroy');



Route::get('/documento', [DocumentoController::class, 'documento']);
Route::put('/documento/{id_documento}', [DocumentoController::class, 'update'])->name('documento.update');
Route::post('/documento', [DocumentoController::class, 'store'])->name('documento.store');
Route::delete('/documento/{id_documento}', [DocumentoController::class, 'destroy'])->name('documento.destroy');


Route::post('/guardar-cliente', [ClienteController::class, 'guardarCliente'])->name('guardar-cliente');

//mostrar cliente en "solicitudServicios"
Route::get('/cliente/{id}', [ClienteController::class, 'mostrarCliente'])->name('mostrar-cliente');


Route::get('/solicitudServicio', function () {
    return view('solicitudServicio', ['cliente' => session('cliente')]);
})->name('solicitudServicio')->middleware('auth:cliente');


Route::post('/upload', 'LIEEcontroller@upload')->name('upload');

//LOGIN
Route::get('/loginClientes', [LoginClientesController::class, 'showLoginForm'])->name('loginClientes');
Route::post('/loginClientes', [LoginClientesController::class, 'login'])->name('loginClientes.submit');

//EspecimenController
Route::post('/especimen', [EspecimenController::class, 'store'])->name('especimen.store');



