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
    return view('welcome'); //starting page
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::group(['middleware'=>'user'], function(){
        Route::get('/users',  'UserController@users');
        Route::get('/users/{id}', 'UserController@usersDetils')->middleware('checkUser');


    });



    Route::group(['middleware'=> 'admin'], function(){
        Route::get('/admins', 'AdminController@admins');

    });

});
// Route::get('/test', function(){
//     $user = App\User::find(3);
//     echo "<b>User: ".$user->name. "</b><br>";
//     foreach($user->roles as $role){
//         echo "Role: ". $role->name ."<br>";
//     }
//     echo "<Br>";
//     $role = App\Role::find(2);
//     echo "<b>Role: ".$role->name. "</b><br>";
//     foreach($role->users as $user){
//         echo "Role: ". $user->name ."<br>";
//     }
//     echo "<br>".session('key');
// });