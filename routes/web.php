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


// Route::get('/', function () {
//     $data=[];
//     $data['id']=1;
//     $data['name']='Muhammed';
//     return view('welcome',$data);
// });
         Route::get('/', function () {
             return 'Laravel';
         });
        // route parameters
        // Route::get('/test2/{id}', function ($id) {
        //     return "Welcome : $id";
        // });
        // Route::get('/test3/{id?}', function () {
        //     return 'Welcome id';
        // });

        //route name
        // Route::get('/show-number/{id}', function ($id) {
        //     return "Welcome";
        // })->name('a');
        //  Route::get('/show-string/{id?}', function () {
        //         return 'Welcome';
        // })->name('b');

        //Namespace Route
        // Route::namespace('Front')->group(function(){
        //     //all routes go to controller or methods find in file name:Front

            // Route::get('users','UserController@index');
         //});

        // Route::get('index','Front\UserController@index');

        // Group and prefix
        // this is way prefix

        // Route::prefix('users')->group(function(){
        //     Route::get('show','UserController@showUserName');
        //     Route::delete('delete','UserController@showUserName');
        //     Route::get('edit','UserController@showUserName');
        //     Route::put('update','UserController@showUserName');
        // });
        // end prefix()
        // this is way group
        // Route::group(['prefix'=>'users'],function(){
        //     Route::get('/add',function(){
        //         return 'Its Work!!!';
        //     });
        //     Route::get('show','UserController@deleteUserName');
        //     Route::delete('delete','UserController@showUserName');
        //     Route::get('edit','UserController@showUserName');
        //     Route::put('update','UserController@showUserName');
        // });
        //end group()

        // middleware
        // Route::get('check',function(){
        // return 'with middleware!';
        // })->middleware('auth');
        // end middleware
        //  invoike to method in secondcontroller
//        Route::get('second','SecondController@secondString');
        //  end controller

  //       Route::get('second','Admin\SecondController@secondString');

    //    Route::group(['namespcae'=>'Admin'],function(){

      //      Route::get('second1','Admin\SecondController@secondString');

        //});

        // this to all parameters
    //Route::resource('news','NewsController');
// view landing page
// Route::get('/land',function(){
//         return view('landing');
// });

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/',function (){
    return 'Home';
});
