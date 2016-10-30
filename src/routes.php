<?php
//use Illuminate\Support\Facades\Route;

$fileManagerConfig = config('lasca-file-manager');

Route::group(['prefix' => $fileManagerConfig['route_prefix'], 'middleware' => 'auth'], function () {

    Route::get('/browse',        ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@browse']);
    Route::get('/browse.php',        ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@browse']);
    Route::post('/browse.php',        ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@browse']);

    Route::get('/css/index.php', ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@css']);
    Route::get('/themes/{theme}/css.php', ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@theme']);

    Route::get('/js/index.php',  ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@js']);
    Route::get('/themes/{theme}/js.php',['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@jsTheme']);
    Route::get('/js/lang/{lang}.js',['uses'=>'\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@jsLocalize']);
    Route::get('/upload',  ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@connector']);
    Route::post('/upload',  ['uses' => '\Neyromanser\LascaFileManager\Controller\LascaFileManagerController@connector']);
});
