<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\userController;

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

Route::get('/teste', function () {
    return view('teste');
});

// //Redirect
// Route::permanentRedirect('/here', '/there');

// //Required Parameters
// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Post '.$postId;
// });

// Route::get('/feedback/{id}', function (Request $request, $id) {
//     return 'Feedback '.$id;
// });

// //Optional Parameters
// Route::get('/teste1/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('/teste2/{name?}', function ($name = 'John') {
//     return $name;
// });

// //Regular Expression Constraints
// Route::get('/usuario/{id}/{name}', function ($id, $name) {
//     return $name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// //Named Routes
// Route::get('/users/{id}/profile', function ($id) {
//     return 'UserID '.$id;
// })->name('profile');

// //Middleware
// // Route::middleware(['first', 'second'])->group(function () {
// //     Route::get('/', function () {
// //         // Uses first & second middleware...
// //     });

// //     Route::get('/user/profile', function () {
// //         // Uses first & second middleware...
// //     });
// // });

// //Subdomain Routing
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('userTest/{id}', function ($account, $id) {
//         //
//     });
// });

// //Route Prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('/users/{id}', function ($id) {
//         // Matches The "/admin/users/{id}" URL
//         return 'User '.$id;
//     });
// });

// //Route Name Prefixes
// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });

Route::resource('usuarios', userController::class);