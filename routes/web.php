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
use App\post;

Route::get('/', function () {
	// data pass to view as array
//    return view('welcome', [
//		'name' => 'world'
//	]);
	
	// pass data as variable
	
//	return view('welcome')->with('name', 'world');
	
	
	$tasks = post::get();
//	$tasks = DB::table('posts')->get();
	$name ='world';
	
	return $tasks;
	
	//return view('welcome', compact('name'));
	
});

Route::get('/posts/{id}', function ($id) {
	$posts = DB::table('posts')->where('id',$id)->get();
	return $posts;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
