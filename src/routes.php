<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

$fileManagerConfig = config('lasca-file-manager');

Route::group([
    'prefix' => $fileManagerConfig['route_prefix'],
    'namespace' => 'Neyromanser\LascaFileManager\Controller',
    'middleware' => 'auth'
], function () {
    //Route::get('/index.html',   ['uses' => 'Admin@getAdminPage']);

    //Route::get('/libs/webix/ckfinder/core/connector/php/connector.php',  ['uses' => 'LascaFileManagerController@connector']);
    //Route::post('/libs/webix/ckfinder/core/connector/php/connector.php',  ['uses' => 'LascaFileManagerController@connector']);
    Route::get('/browse',          ['uses' => 'LascaFileManagerController@browse']);
});
