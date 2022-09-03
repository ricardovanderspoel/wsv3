<?php

use Illuminate\Support\Facades\Route;


Route::get('login', function() {
  return view('login');
})->name('login');

Route::get('{path}', function() {
  if (auth()->check()) {
    return view('welcome');
  }
  return redirect()->route('login');
})->where('path', '.*')->name('vue');


