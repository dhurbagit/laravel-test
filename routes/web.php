<?php

use App\Http\Controllers\NewstudentController;
use App\Http\Controllers\NewteacherController;
use App\Http\Controllers\ViewstudentListController;

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
    return view('welcome');
});

Route::get('/newstudent', [NewstudentController::class, 'index']);
Route::post('/createNewstudentrecord', [NewstudentController::class, 'createNewstudentrecord']);

Route::get('/newteacher', [NewteacherController::class, 'index']);
Route::post('/newteacherfrom', [NewteacherController::class, 'store']);

Route::get('/studentlist', [ViewstudentListController::class, 'showdata'])->name('getList');

// Route::get('updatestudent', function(){
//     return view('updtetestudent');
// });
Route::get('/editstudent/{id}', [ViewstudentListController::class, 'edit']);
Route::post('/updatestudent/{id}', [ViewstudentListController::class, 'updatestudent']);

Route::get('delete/{id}', [ViewstudentListController::class, 'delete']);
// Route::get('delete/{id}', [ViewstudentListController::class, 'refreshDB']);
Route::get('studentgallery/{id}', [ViewstudentListController::class,'viewgallery']);
// Route::get('deleteImage', [ViewstudentListController::class, 'delete']);