<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\trycontroller;
use Illuminate\Support\Facades\Route;
use App\Models\Picture;
use Illuminate\Http\Request;
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
    return view('home');
});
Route::get('/dashboard',[trycontroller::class,'dashboard'
])->middleware(['auth'])->name('dashboard');
Route::get('/home_seller1',[trycontroller::class,'home_seller'
])->middleware(['auth'])->name('home_seller1');
Route::get('/add_sellerr',[trycontroller::class,'add_seller'
])->middleware(['auth'])->name('add_sellerr');
Route::post('store',[trycontroller::class,'store'])->name('store');
Route::get('/show_sellerr/{Rtr}',[trycontroller::class,'show_seller'])->middleware(['auth'])->name('show_sellerr');
Route::post('edit/{Rtr}',[trycontroller::class,'edit'])->name('edit');
Route::get('/edit_seller/{Rtr}',[trycontroller::class,'edit_seller'])->middleware(['auth'])->name('edit_seller');
Route::get('/all',[trycontroller::class,'all'
])->middleware(['auth'])->name('all');
Route::get('search',[trycontroller::class,'search'])->name('search');
Route::get('/search_seller',[trycontroller::class,'search_seller'
])->middleware(['auth'])->name('search_seller');
Route::get('/home_user',[trycontroller::class,'home_user'
])->middleware(['auth'])->name('home_user');
Route::get('/addccp',[trycontroller::class,'addccp'])
     ->name('addccp');
     Route::post('store2',[trycontroller::class,'store2'])->name('store2');
     Route::get('/show_user/{ccp}',[trycontroller::class,'show_user'])->middleware(['auth'])->name('show_user');
     Route::post('edit2/{ccp}',[trycontroller::class,'edit2'])->name('edit2');
     Route::get('/edit_user/{ccp}',[trycontroller::class,'edit_user'])->middleware(['auth'])->name('edit_user');
     Route::get('/addstore',[trycontroller::class,'addstore'])
     ->name('addstore');
     Route::post('store3',[trycontroller::class,'store3'])->name('store3');
     Route::get('/show_store/{stor}',[trycontroller::class,'show_store'])->middleware(['auth'])->name('show_store');
     Route::post('edit3/{stor}',[trycontroller::class,'edit3'])->name('edit3');
     Route::get('/edit_store/{stor}',[trycontroller::class,'edit_store'])->middleware(['auth'])->name('edit_store');
     Route::get('search2',[trycontroller::class,'search2'])->name('search2');
     Route::get('/search_user',[trycontroller::class,'search_user'
     ])->middleware(['auth'])->name('search_user');

     Route::get('/all2',[trycontroller::class,'all2'
     ])->middleware(['auth'])->name('all2');

Route::get('/info1',[trycontroller::class,'edit_info1'])
     ->name('info1');
     Route::put('update1/{id}', [trycontroller::class, 'update1'])->middleware(['auth'])->name('update1');

Route::get('/infoo',[trycontroller::class,'edit_info'])
     ->name('infoo');
     Route::put('update/{id}', [trycontroller::class, 'update'])->middleware(['auth'])->name('update');


     Route::get('/terms',[trycontroller::class,'terms'
     ])->middleware(['auth'])->name('terms');
     Route::get('/terms1',[trycontroller::class,'terms1'
     ])->middleware(['auth'])->name('terms1');
     Route::get('/about',[trycontroller::class,'about'
     ])->middleware(['auth'])->name('about');
     Route::get('/about1',[trycontroller::class,'about1'
     ])->middleware(['auth'])->name('about1');
     Route::post('msg',[trycontroller::class,'msg'])->name('msg');

require __DIR__.'/auth.php';
