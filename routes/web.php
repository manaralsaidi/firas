<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/hiba',function(){
    return view('newfolder.manar');
});
Route::get('/contact',function(){
    return view('newfolder.manar');
});
Route::get('contact',function(){
    $name=request("n");
    return $name;
});
Route::get('contact/{id}',function($id){
    $name=request("n");
    return view('newfolder.contact',['id'=>$id]);
});
route::get('/category/{id}',function($id){
    $cat=[
        1=>"games",
        2=>"books",
        3=>"tools",
    ];
    return view('newfolder.category',
    ['cat'=>$cat[$id]??"notfoound"]);
});

