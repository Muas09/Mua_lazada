<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mas', [App\Http\Controllers\PageController::class, 'getIndex']);
Route::get('/detail/{id}', [App\Http\Controllers\PageController::class, 'getDetail']);

Route::get('/type/{id}', [App\Http\Controllers\PageController::class, 'getLoaiSp']);

Route::get('/admin', [App\Http\Controllers\PageController::class, 'getIndexAdmin']);

Route::get('/admin-add-form', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [App\Http\Controllers\PageController::class, 'postAdminAdd']);
Route::get('/admin-edit-form/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [App\Http\Controllers\PageController::class, 'postAdminEdit']);


Route::post('/admin-delete/{id}', [App\Http\Controllers\PageController::class, 'postAdminDelete'])->name('delete-product');


Route::post('/admin-export', [App\Http\Controllers\PageController::class, 'exportAdminProduct'])->name('export');

// Route::get('/detail/{id}', [App\Http\Controllers\PageController::class, 'getDetail']);

// Admin
// Route::get('/Admin', [App\Http\Controllers\PageController::class, 'getIndexAdmin']);
//22/4/2023

// Route::get('/form', [SingupController::class, 'index']);
// Route::post('/form', [SingupController::class, 'displayInFor']);

// Route::get('/',function(){

// })

// Route ::get('/welcome',function(){
//     return 'Chào mừng các bạn đến với PNV';
// });

// Route::get('/welcome',[XinchaoController:: class,'Hello']);
// Route::get('/', [XinchaoController::class, 'Hello']);
// 

// Route::get('/computeArea', [AreaofShapeController::class, 'computeArea']);
// Route::post('/computeArea', [AreaofShapeController::class, 'computeArea']);

// Route::get('/sum', [XinchaoController::class, 'Hello']);
// Route::post('/sum', [XinchaoController::class, 'Hello']);

// Route::get('/',function(){
//     // $html='<h1>Học lập trình Laravel</h1>';
//     // return 'Home page';

// });
// Route::get('/', function  () {
//     return view('welcome');
// });

// Route::get('/unicode',function(){
//     return view('form');
//     //return 'Phương thức Get của path/unicode';
// });
// Route::post('/unicode',function(){
//     return 'Phương thức Post của path/unicode';
// });

// Route::put('unicode',function(){
//     return 'Phương thức Put của path/unicode';
// });

// Route::delete('unicode',function(){
//     return 'Phương thức Delete của path/unicode';
// });

// Route::patch('unicode',function(){
//     return 'Phương thức Patch của path/unicode';
// });


// //Nhận nhiều phương thức

// Route::match(['get','post'],'unicode',function(){
//     return $_SERVER['REQUEST_METHOD'];
// });
// Route::get('show-form',function(){
//     return view('form');
// });

// Route::any('unicode',function(){
//     return $_SERVER['REQUEST_METHOD'];
// });
Route::get('/ac', [PageController::class, 'index']);