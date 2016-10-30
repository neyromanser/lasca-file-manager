<?php
//use Illuminate\Support\Facades\Route;

$fileManagerConfig = config('lasca-file-manager');

Route::group(['prefix' => $fileManagerConfig['route_prefix'], 'middleware' => 'auth'], function () {

    Route::get('/js/lang/{lang}.js',['uses'=>'\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@jsLocalize']);

    Route::get('/browse',      ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@browse']);
    Route::get('/browse.php',  ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@browse']);
    Route::post('/browse.php', ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@browse']);

    Route::get('/upload',      ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@connector']);
    Route::post('/upload',     ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@connector']);
});
