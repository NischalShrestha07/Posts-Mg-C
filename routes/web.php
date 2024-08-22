<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


// //Basic Routing
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/welcome', function () {
//     return 'Welcome To Laravel';
// });

// //Parameters Routing
// Route::get('/user/{id}', function ($id) {
//     return "User ID:" . $id;
// });

// Route::get('/post/{postID}/comment/{commentID}', function ($postID, $commentID) {
//     return "Post ID: $postID and Comment ID: $commentID";
// });



// //Optional Parameters
// Route::get('/users/{user?}', function ($name = 'Narayan') {
//     return 'HELLO, ' . $name;
// });
// // //Named Parameter
// // Route::get('/dashboards', function () {
// //     return view('dashboard');
// // })->name('dashboard');
// // return redirect()->route('dashboard');
// // not working


// //Route Groups
// Route::prefix('admin')->group(function () {
//     Route::get('dashboard', function () {
//         return 'Admins Dashboard';
//     });
// });





// //ResourceFul Routing
// Route::resource('photos', Controller::class);

// //use when non of the route is matched
// Route::fallback(function () {
//     return "Page Not FOund";
// });


// Route::get('/', [PhotoController::class, 'index'])->name('hello');
//

// Route::get('/', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


// Route::get('/', function () {
//     return "HEllo Laravel";
// });
// Route::get('/', [PostController::class, 'index']);
// Route::get('/post/{id?}', function ($id = "8980") {
//     return "My ID is: " . $id;
// });


// Route::resource('/hellos', HelloController::class);
// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return "HEllo Admin";
//     });
//     Route::get('/bye', [PostController::class, 'index']);

// });


// Route::prefix('wow')->group(function () {

//     Route::get('hello/{name?}', function ($name = 'Narayan') {
//         return "Namasstey " . $name;
//     });
//     // Route::get('name/{name?}/class/{class?}', function ($name = 'narayan', $class = '12') {
//     //     return "HEllo " . $name . "You read in class " . $class;
//     // });
//     Route::get('name/{name}/age/{age}', function ($name, $age) {
//         return "HEllo  $name. You are $age years old. ";
//     });
// });



// Route::get('/demo', function () {
//     return "HEllo World";
// });

// Route::post('/demo', function (Request $request) {
//     return "HEllo World" . $request->input('data');
// });



Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.store');
