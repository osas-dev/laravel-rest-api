<?php

use App\Http\Controllers\Controller;
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
    return view('/auth/register');
});

Route::get('/add_contacts', [Controller::class, 'add_contacts']);
Route::post('/create_contact', [Controller::class, 'create_contact']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [Controller::class, 'show_contacts'])->name('dashboard');
});

Route::get('/delete_contact/{id}', [Controller::class, 'delete_contact'])->name('delete_contact');
Route::get('/view_contact/{id}', [Controller::class, 'view_contact'])->name('view_contact');
Route::get('/edit_contact/{id}', [Controller::class, 'edit_contact'])->name('edit_contact');
Route::post('/update_contact/{id}', [Controller::class, 'update_contact'])->name('update_contact');


