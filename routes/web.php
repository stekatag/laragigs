<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Common resource routes
// index - show all listings
// show - show a single listing
// create - show the form to create a listing
// store - save the new listing
// edit - show the form to edit a listing
// update - save the edited listing
// destroy - delete a listing