<?php

use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;
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

//Route::get('/contact', 'PostsController@contact');

//Route::get('/post/{id}/{username}', 'PostsController@post');
//  Route::get('/insert', function(){
//  DB::insert('insert into posts(title, content) values(?,?)', ['Test content lorem','zzzzz']);
// });

// Route::get('/read', function(){
//    $result = DB::select('select * from posts where id=?', [1]);
//    foreach($result as $posts){
//        return $posts->title;
//    }
// });

// Route::get('/update', function(){
//     $update = DB::update('update posts set title = "updated title" where id=?', [1]);
//     return $update;
// });

// Route::get('/delete', function(){
//     $delete = DB::delete('delete from posts where id=?', [1]);
//     return $delete;
// });

// Route::get('/find', function(){
//     $result = Post::all();

//     foreach($result as $post){
//         return $post->content;
//     }
// });

// Route::get('/findwhere', function(){
//     $find = Post::where('id', '3')->orderBy('id', 'Desc')->take(1)->get();
//     return $find;
// });

// Route::get('/findmore', function(){

//     $posts = Post::where('users_count', '<', 50)->firstOrFail();

//     return $posts;

// });

// Route::get('/basicinsert', function(){
//     $post = new Post;
//     $post->title = "New eloquent title";
//     $post->content = "New eloquent body";
//     $post->save();
// });

// Route::get('/basicinsert2', function(){
//     $post = Post::find(2);
//     $post->title = "New eloquent title";
//     $post->content = "New eloquent body";
//     $post->save();
// });


// Route::get('/create', function(){
//     Post::create(['title'=>'aaaaaaaa', 'content'=>'dfsdsssssfsdf']);
// });

// Route::get('/update', function() {
//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'abcdefghi', 'content'=>'123456788']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(2);
//     $post->delete();
// });

// Route::get('/delete2', function(){
//     Post::destroy([4,5]);
// });

// Route::get('/softdelete', function(){
//     Post::find(8)->delete();
// });

// Route::get('/readsoftdelete', function(){
//     $post = Post::onlyTrashed()->where('id', 6)->get();
//     return $post;
// });

// Route::get('/restore', function(){
//     Post::withTrashed()->where('id', 8)->restore();
// });

// Route::get('/forcedelete', function(){
//     Post::withTrashed()->where('id', 7)->forceDelete();
//     Post::onlyTrashed()->where('id', 7)->forceDelete();
// });

// one to one
// Route::get('/user/{id}/post', function($id){
//     return User::find(1)->post;
// });

// Inverse
// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
// });

//One to Many
// Route::get('/posts', function(){
//     $user = User::find(1);
//     foreach($user->posts as $post){
//         echo $post->title. "<br>";
//     }
// });

//Many to Many
//Route::get('/user/{id}/role', function($id){
// $user = User::find($id)->roles()->orderBy('id', 'DESC')->get();
//return $user;
    // foreach($user->roles as $role){
    //    return $role->name;
    // }
//});

//Accessing the intermediate table = pivot table
// Route::get('user/pivot', function(){
//     $user = User::find(1);
//     foreach($user->roles as $role){
//         echo $role->pivot->created_at;
//     }
// });

// has many through relation
// Route::get('user/country', function(){
//     $country = Country::find(4);
//     foreach ($country->posts as $post){
//         return $post->title;
//     }
// });

//Polymorphic relationsip

// Route::get('user/photos', function(){
//     $user = User::find(1);
//     foreach ($user->photos as $photo){
//         return $photo->path;
//     }
// });

Route::get('photo/{id}/post', function($id) {
    $photo = Photo::findOrFail($id);
    return $photo->imageable;
});






// Route::get('/contact', function(){
//     return view('contact');
// });



