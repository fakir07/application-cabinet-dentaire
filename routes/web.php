<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\OrdonnanceController;





// Route::get('/', function () {
//     return view('layouts.master');
// });
Auth::routes(['register' => true]);
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   
    // route users and permission 
    //////////////// Roles
    Route::resource('roles', RoleController::class);
    //////////////// Users
    Route::resource('users', UserController::class);
    //////////////// patients
    Route::resource('patients',PatientsController::class);
    /////////////// medicament
    Route::resource('medicament',MedicamentController::class);
    /////////////// rendezvous
    Route::resource('rendezvous',RendezVousController::class);
    Route::resource('rendezvous',RendezVousController::class);
    Route::get('/getpatient/{id}', [App\Http\Controllers\RendezVousController::class, 'getpatient'])->name('getpatient');
    Route::get('/salledattente', [App\Http\Controllers\RendezVousController::class, 'salledattente'])->name('salledattente');
    Route::post('add_rend', [App\Http\Controllers\RendezVousController::class, 'add_rend'])->name('add_rend');
    Route::post('updateStatus', [App\Http\Controllers\RendezVousController::class, 'updateStatus'])->name('updateStatus');
    // Calendar routes
   
    Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
    Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
    Route::post('store_t', [CalendarController::class, 'store_t'])->name('store_t');
    Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
    Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');
    
    // consultation
    Route::resource('consultation', ConsultationController::class);
    
    // Ordonnance
    Route::resource('Ordonnance', OrdonnanceController::class);
    Route::resource('Ordonnance', OrdonnanceController::class);
    
    

});