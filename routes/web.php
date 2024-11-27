<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('blank', function () {
    return view('blank');
});

// Route for Estate Planning Account Summary
Route::get('estate-planning/account-summary', function () {
    return view('pages.estate-planning.as-estate');
})->name('account.summary');

// Route for Will Creation and Management in the Estate
Route::get('estate-planning/will/create', function () {
    return view('pages.estate-planning.create');
})->name('will.create');

Route::get('estate-planning/will/manage', function () {
    return view('pages.estate-planning.manage-estate');
})->name('will.manage');

// Route for Adding Beneficiaries
Route::get('estate-planning/beneficiary/add', function () {
    return view('pages.estate-planning.beneficiaries');
})->name('beneficiary.add');

// Route for Authentication
Route::get('signin', function () {
    return view('auth.signin');
})->name('signin');
Route::get('signup', function () {
    return view('auth.signup');
})->name('signup');
Route::get('resetpass', function () {
    return view('auth.resetpass');
})->name('resetpass');
Route::get('otp', function () {
    return view('auth.otp');
});
