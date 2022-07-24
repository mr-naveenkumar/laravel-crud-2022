<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get("show-form",[CrudController::class,"showForm"]);

// insert form 
Route::post("insert-form",[CrudController::class,"insertForm"])->name("post.form");

// show listing page 
Route::get("show-listing",[CrudController::class,"showListing"]);

Route::get("delete/{id}",[CrudController::class,"deleteData"])->name("deleting");

// this is for update data form 

Route::get("edit-page/{id}",[CrudController::class,"editForm"]);

// update form data 
Route::post("update-form",[CrudController::class,"updateData"])->name('post.update');