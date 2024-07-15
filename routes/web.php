<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('home');
});
Route::get('/demo',function(){
   return view('demo');


});

Route::any('/test',function(){
    echo "Testing the route";
});
Route::get('/test/{id}',function($id){
    echo "Testing the route with id $id";
    });
