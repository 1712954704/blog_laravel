<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// 设置允许跨域
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET,POST,PUT,DELETE');
header('Access-Control-Allow-Headers:Origin, Content-Type, Cookie, Accept');
header('Access-Control-Allow-Credentials:true');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// 路由分组 此路由组将会传送 'Api' 命名空间
Route::group(["namespace"=>'Api'],function (){
    // 路由分组 增加路由前缀 admin
    Route::group(["prefix"=>"admin"],function(){
        Route::post('/login','AdminController@login');
    });
});
