<?php

use Illuminate\Support\Facades\Route;

//route for home page
Route::get('/',function(){
    return view("pages.home");
})->name('home');
//route for about us page
Route::get('/about-us',function(){
    return view("pages.about");
})->name("about");


//1 H 47:02 : Créer et déployer une application Laravel