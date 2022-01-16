<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

//You can return an anvironment variable
// Route::get('/', function () {
//     return env('CREATOR_NAME');
// });

//original route
// Route::get('/', function(){
//     return view('welcome');
// });

// //Route that sends back a view 
// //Route to users - and return a string
// Route::get('/users', function (){
//     return 'Welcome to the users page';
// } );
 
// //Route to users - and return an array
// Route::get('/users', function(){
//     return ['PHP', 'HTML', 'Laravel', 'Node'];
// });

// //Route to users - and return a JSON object
// Route::get('/users', function(){
//     return response()->json([
//         'name' => 'Mbui',
//         'course' => 'Laravel advanced',
//     ]);
// });

// //Route to users - and return a function
// Route::get('/users', function(){
//     return redirect('/');
// });

// Route to a newly created view called Home
// Route::get('/', function(){
//     return view('home');
// });

Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/about', [ProductsController::class, 'about']);

// //Laravel 8 (New)
// Route::get('/products', 'App\Http\Controllers\ProductsController@index'); 

// products/id -> this shows a specific product
// Route::get('/products/{id}', [ProductsController::class, 'show']);

//let's use name instead of id
//Route::get('/products/{name}', [ProductsController::class, 'show']);

//Pattern is integer
//Route::get('/products/{id}', [ProductsController::class, 'show']) -> where('id',  '[0-9]+');

//Pattern is string
//Route::get('/products/{name}', [ProductsController::class, 'show']) -> where('name',  '[a-zA-Z]+');

//Pattern is both an integer and a string
Route::get('/products/{name}/{id}', [ProductsController::class, 'show']) -> where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
]);