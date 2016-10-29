<?php namespace Neyromanser\LascaFileManager\Controller;

use Illuminate\Support\Facades\Config;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class LascaFileManagerController extends BaseController{

    protected $kcfinder;
    /**
     * Create a new DreamController controller instance.
     * @return void
     */
    public function __construct() {
        //$this->kcfinder = $kcfinder;
    }

    public function connector(){

        /*
        $config = config('ckfinder');
        $config['authentication'] = function(){return true;};
        $config['backends'][0]['baseUrl'] = url('/'.env('GLIDE_WEB_PATH','img').'/');
        $ckfinder = new CKFinder($config);
        $ckfinder->run();
        */
    }

    public function browse(){

        return 'ok';

        //$browser = FinderCore::browser();
        //$browser->action();

        return;

        //require "core/bootstrap.php";
        $FM_CORE_PATH = public_path('admin/libs/webix/kcfinder/');
        //chdir($FM_CORE_PATH);
        echo __DIR__;

        //require public_path('admin/libs/webix/kcfinder/core/bootstrap.php');
        require 'core/bootstrap.php';
        $browser = "kcfinder\\browser"; // To execute core/bootstrap.php on older
        $browser = new $browser();      // PHP versions (even PHP 4)
        $browser->action();

        //return $view;
    }

    public function browse_(){
        $unblock = "";
        //$unblock = "$(window).load(function() { console.log('123'); }) ";

        $view = '<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"><meta name="csrf-token" content="'.csrf_token().'" /><title>CKFinder 3 - File Browser</title></head><body><script src="/admin/libs/webix/ckfinder/ckfinder.js"></script><script>CKFinder.start(); '.$unblock.'</script></body></html>';

        return $view;
    }

}
