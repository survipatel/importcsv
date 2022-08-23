<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
//use App\Commands\ImportContacts;



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
	//(new ImportContacts())-> handle();
	//dd('done');
    return view('welcome');
});

Route::get('import',  'ContactsController@import');
Route::post('import', 'ContactsController@parseImport');

//Route::get('/import', [ContactsController::class, 'import']);
//Route::get('/import', [ContactsController::class, 'parseImport']);

