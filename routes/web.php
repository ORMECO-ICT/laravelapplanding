<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;

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
    // $modules = App\Models\Portal::cursor()->filter(function($module){
    //     return $module->directory <> '';
    // })->all();

    // $modules = DB::table('portals')
    //     ->whereNotNull('directory')
    //     ->get();

    $modules = App\Models\Portal::whereNotNull('directory')->get();
    return view('welcome', compact('modules'));
})->middleware('auth');

// Route::view('/', 'welcome')->middleware('auth');
Route::view('/home', 'home')->middleware('auth');

Route::controller(PortalController::class)->group(function () {
    $home = '/' . PortalController::BASE;
    Route::get($home.'', 'index');
    Route::get($home.'/create', 'create');
    Route::get($home.'/{id}', 'show');
    Route::post($home.'', 'store');
});


// Route::get('/atms', function(){
//     $name = '';
//     return '';
// })->middleware('auth');
