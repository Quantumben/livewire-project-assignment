<?php

use App\Http\Livewire\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\TodoListController;

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


Route::get('/', Index::class);
