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
    return view('welcome');
});
/*
//2. 設定從 app/Http/routes.php回傳這個頁面
Route::get('home',function(){
    return view('home');
});
*/
//6. 修改 app/Http/routes.php載入的頁面路徑
/*
Route::get('home',function(){
    return view('home.index');
});
*/
Route::get('/home', 'HomeController@index');

//練習 3：傳遞資料至 view 顯示
//3. 設定 Route
Route::get('hello/{name?}',['as'=>'hello.index','uses'=>'HelloController@index']);