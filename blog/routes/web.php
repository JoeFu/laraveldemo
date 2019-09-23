<?php
use Illuminate\Routing\Router;

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

//This is the home page Route
Route::get('/', 'HomeController@index');
Route::get('/cn', 'HomeController@index_cn');

//This is the attendance page Route

Route::get('/attendance',function(){

    return view ('home');
});




Route::get('/admin','UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/test/{test}', function($test){
//
//    $array  = [
//        'first' => 'This is the first post',
//        'second' => 'This is the second post'
//    ];
//
//    if (! array_key_exists($test,$array))
//    {
//     abort(404,'Sorry the page were not found!');
//    }
//
//
//
//
//    return view('test',[
//        'show' => $array[$test] ?? "NO POST"
//    ]);
//
//});

Route::get('/test/{test}','testController@show');




