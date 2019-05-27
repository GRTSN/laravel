<?php

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
    return view('welcome');
});

// Route::get('home',function() {
// 	echo "home page";
// });
// Route::get('about',function(){
// 	echo "about page";
// });
// Route::get('active',function(){
// 	echo "active page";
// });
// Route::get('file/{id}/{name?}',function($id,$name = null){
// 	echo "file detilse and your id is :".$id." and your name is :".$name;
// });

// Route::get('janina/{id}/{name?}',function($id,$name = null){
// 	echo "this is your id is:".$id."and your name is :".$name;
// });
// Route::get();
