<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "about ussss";
// });

// Route::get('/contact', function () {
//     return "conatct us";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "this is a post id:".$id." ".$name;
// });

// Route::get('admin/post/article', array('as' => 'admin.home', function ($id, $aname) {
//    $url = route ('admin.home'); 
//     return "this is url".$url;
// }));

///Route::get('/post/{id}', 'PostsController@index');

Route::get('/contact', 'PostsController@contact');

//Route::get('/post/{id}/{username}', 'PostsController@post');







// Route::get('/contact', function(){
//     return view('contact');
// });



