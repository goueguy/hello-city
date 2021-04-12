<?php

use Illuminate\Support\Facades\Route;

//route for home page
Route::get('/',function(){
    return view("pages.home");
});
//route for about us page
Route::get('/about-us',function(){
    return view("pages.about");
});

