<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;


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
Route::resource('home', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
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


Route::group(["prefix" => "/student"], function (){
    Route::get('/create',[StudentController::class, 'create']);
    Route::get('/detail/{student}', [StudentController::class, 'show']);
    Route::get('/', [StudentController::class, 'index']);
    Route::post('/add',[StudentController::class,'store']);
    Route::delete('/delete/{id}',[StudentController::class,'destroy']);
    Route::post('/update/{id}', [StudentController::class, 'update']);
    Route::get('/edit/{student}', [StudentController::class, 'edit']);
});
