<?php

use App\Http\Controllers\kelas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtracurricularController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::resource('home', ProductController::class);


Route::get('/', function (){
    return view('home' , ['nama' => 'HomePage' ,'title' => "HomePage"]);
});

Route::get('/about', function (){
    return view( "about", ['halaman' => 'about' ,
    'title' => 'about',
    'nama' => 'Mirza Zulfadhli Amin',
    'kelas' => '11 PPLG 1',
    'foto' =>   "images/foto.png",
]);
});


Route::get('/extracurricular', [ExtracurricularController::class, 'index']);

Route::fallback(function(){
    return view('404');
});

Route::get('/posts/{id}', function ($id) {
    return "Post dengan ID {$id}";
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(["prefix" => "/dashboard"], function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/kelas', [DashboardController::class, 'kelas'])->name('dashboardkelas');
    });
});

Route::group(["prefix" => "/student"], function (){
    Route::get('/create',[StudentController::class, 'create']);
    Route::get('/detail/{student}', [StudentController::class, 'show']);
    Route::get('/', [StudentController::class, 'index'])->name('home');
    Route::post('/add',[StudentController::class,'store']);
    Route::delete('/delete/{id}',[StudentController::class,'destroy']);
    Route::post('/update/{id}', [StudentController::class, 'update']);
    Route::get('/edit/{student}', [StudentController::class, 'edit']);

    Route::get('/kelas', [kelasController::class, 'index']);
    Route::post('/kelas', [kelasController::class, 'store'])->name('kelas.store');
    Route::patch('/kelas/{id}', [kelasController::class, 'update'])->name('kelas.update');
    Route::delete('/kelas/{id}', [kelasController::class, 'destroy']);
    // Route::get('/kelas', [kelasController::class, 'index']);
});



Route::post('/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('/register', [AuthenticationController::class, 'create']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('Auth.sign_in', ['title' => 'login']);
})->middleware('guest');
Route::get('/register', function () {
    return view('Auth.register', ['title' => 'login']);
})->middleware('guest');
// ->middleware('guest')

