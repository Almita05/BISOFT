<?php

use Illuminate\Support\Facades\Route;

// Livewire
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Users;
use App\Http\Livewire\PlanesDeEstudio;
use App\Http\Livewire\PlanesDeEstudioBTI;
use App\Http\Livewire\Equivalencias;
use App\Http\Livewire\Grupos;
use App\Http\Livewire\BootstrapTables;
use App\Http\Livewire\Components\Buttons;
use App\Http\Livewire\Components\Forms;
use App\Http\Livewire\Components\Modals;
use App\Http\Livewire\Components\Notifications;
use App\Http\Livewire\Components\Typography;

// Auth
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\ForgotPassword;
use App\Http\Livewire\ResetPassword;

// Extras
use App\Http\Livewire\Err404;
use App\Http\Livewire\Err500;
use App\Http\Livewire\Lock;
use App\Http\Livewire\UpgradeToPro;
use App\Http\Livewire\ProfileExample;
use App\Http\Livewire\LoginExample;
use App\Http\Livewire\RegisterExample;
use App\Http\Livewire\ForgotPasswordExample;
use App\Http\Livewire\ResetPasswordExample;

// Controllers
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AlumnoController; // 👈 ESTE FALTABA

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/login');

// 🔐 Auth
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password/{id}', ResetPassword::class)
    ->name('reset-password')
    ->middleware('signed');

// ⚠️ Errores / extras
Route::get('/404', Err404::class)->name('404');
Route::get('/500', Err500::class)->name('500');
Route::get('/upgrade-to-pro', UpgradeToPro::class)->name('upgrade-to-pro');

// 🔒 Rutas protegidas
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Perfil
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/profile-example', ProfileExample::class)->name('profile-example');

    // Usuarios
    Route::get('/users', Users::class)->name('users');

    // Ejemplos
    Route::get('/login-example', LoginExample::class)->name('login-example');
    Route::get('/register-example', RegisterExample::class)->name('register-example');
    Route::get('/forgot-password-example', ForgotPasswordExample::class)->name('forgot-password-example');
    Route::get('/reset-password-example', ResetPasswordExample::class)->name('reset-password-example');

    // Componentes
    Route::get('/planes-de-estudio', PlanesDeEstudio::class)->name('planes-de-estudio');
    Route::get('/grupos', Grupos::class)->name('grupos');
    Route::get('/planes-bti', PlanesDeEstudioBTI::class)->name('planes-bti');
    Route::get('/equivalencias', Equivalencias::class)->name('equivalencias');
    Route::get('/bootstrap-tables', BootstrapTables::class)->name('bootstrap-tables');
    Route::get('/buttons', Buttons::class)->name('buttons');
    Route::get('/notifications', Notifications::class)->name('notifications');
    Route::get('/forms', Forms::class)->name('forms');
    Route::get('/modals', Modals::class)->name('modals');
    Route::get('/typography', Typography::class)->name('typography');

    // Lock
    Route::get('/lock', Lock::class)->name('lock');

    // 🎓 Alumnos
    Route::get('/alumnos', [AlumnosController::class, 'index'])->name('alumnos.index');
    Route::get('/alumnos/list', [AlumnosController::class, 'getAlumnos'])->name('alumnos.list');
    Route::get('/alumnos/crear', [AlumnosController::class, 'crear'])->name('alumnos.crear');

    // Datos dinámicos
    Route::get('/generaciones', [AlumnoController::class, 'getGeneraciones'])->name('generaciones');
    Route::get('/grupos/{id}', [AlumnoController::class, 'getGrupos'])->name('grupos');


});