<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// Common resource routes
// index - show all listings
// show - show a single listing
// create - show the form to create a listing
// store - save the new listing
// edit - show the form to edit a listing
// update - save the edited listing
// destroy - delete a listing

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show the form to create a new listing
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
