<?php

use App\Models\User;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReservationController;

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

// Rutas vistas Generales
Route::get('/inicio', function () {
    return view('hotel_cliente.index');
});
Route::get('/servicios', function () {
    return view('hotel_cliente.servicios');
});
Route::get('/galeria', function () {
    return view('hotel_cliente.galeria');
});
Route::get('/nuestrohotel', function () {
    return view('hotel_cliente.nuestrohotel');
});
Route::get('/reservas', function () {
    return view('hotel_cliente.reservas');
});
Route::get('/contactenos', function () {
    return view('hotel_cliente.contactenos');
});

//Route::post('/reservation/store', [ReservationController::class, 'store']);

// Ruta general para redirigir a la vista 'welcome'
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rutas para la gestión del usuario Admininistrador
Route::middleware(['auth:sanctum', 'verified'])->get('/dashAdmin', function () {
    return view('dashAdmin.index');
})->name('dashAdmin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashAdmin/usuarios', function () {
    return view('dashAdmin.usuarios');
})->name('usuarios');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashAdmin/habitaciones', function () {
    return view('dashAdmin.habitaciones');
})->name('habitaciones');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashAdmin/reservas', function () {
    return view('dashAdmin.reservas');
})->name('reservas');

// Rutas para la gestión del usuario Cliente
Route::middleware(['auth:sanctum', 'verified'])->get('/dashCliente', function () {
    return view('dashCliente.index');
})->name('dashCliente');

//Route::middleware(['auth:sanctum', 'verified'])->get('/usuarios', 
//[UserController::class,'index'])->name('usuarios');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashAdmin/usuarios',
        [UserController::class, 'index'])->name('usuarios');

Route::middleware(['auth:sanctum', 'verified'])->get('/usuarios/create',
        [UserController::class, 'create'])->name('createUser');

Route::middleware(['auth:sanctum', 'verified'])->post('/usuarios/store',
        [UserController::class, 'store'])->name('storeUser');

Route::middleware(['auth:sanctum', 'verified'])->get('/usuarios/{id}/edit',
        [UserController::class, 'edit'])->name('editUsuario');

Route::middleware(['auth:sanctum', 'verified'])->post('/usuarios/{id}/update',
        [UserController::class, 'update'])->name('updateUsuario');

Route::middleware(['auth:sanctum', 'verified'])->any('/usuarios/{id}/delete',
        [UserController::class, 'delete'])->name('deleteUsuario');

//Rutas para la gestión de habitaciones
//Route::middleware(['auth:sanctum', 'verified'])->get('/habitaciones', 
//[RoomController::class,'index'])->name('habitaciones');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashAdmin/habitaciones',
        [RoomController::class, 'index'])->name('habitaciones');

Route::middleware(['auth:sanctum', 'verified'])->get('/habitaciones/create',
        [RoomController::class, 'create'])->name('createRoom');

Route::middleware(['auth:sanctum', 'verified'])->post('/habitaciones/store',
        [RoomController::class, 'store'])->name('storeRoom');

Route::middleware(['auth:sanctum', 'verified'])->get('/habitaciones/{id}/edit',
        [RoomController::class, 'edit'])->name('editRoom');

Route::middleware(['auth:sanctum', 'verified'])->post('/habitaciones/{id}/update',
        [RoomController::class, 'update'])->name('updateRoom');

Route::middleware(['auth:sanctum', 'verified'])->any('/habitaciones/{id}/delete',
        [RoomController::class, 'delete'])->name('deleteRoom');

//Rutas para la gestión de reservas
//Route::middleware(['auth:sanctum', 'verified'])->get('/reservas',
//[BookingController::class,'index'])->name('reservas');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashAdmin/reservas',
        [BookingController::class, 'index'])->name('reservas');

Route::middleware(['auth:sanctum', 'verified'])->get('/reservas/create',
        [BookingController::class, 'create'])->name('createBooking');

Route::middleware(['auth:sanctum', 'verified'])->post('/reservas/store',
        [BookingController::class, 'store'])->name('storeBooking');

Route::middleware(['auth:sanctum', 'verified'])->get('/reservas/{id}/edit',
        [BookingController::class, 'edit'])->name('editBooking');

Route::middleware(['auth:sanctum', 'verified'])->post('/reservas/{id}/update',
        [BookingController::class, 'update'])->name('updateBooking');

Route::middleware(['auth:sanctum', 'verified'])->any('/reservas/{id}/delete',
        [BookingController::class, 'delete'])->name('deleteBooking');

//Rutas para la gestión del usuario Admin
Route::get('/admin', [AdminController::class, 'index'])
        ->middleware('auth.admin')
        ->name('admin.index');
