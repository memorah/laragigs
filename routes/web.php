<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');



// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing --always at bottom--
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Show Register/create form 
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User Out

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
