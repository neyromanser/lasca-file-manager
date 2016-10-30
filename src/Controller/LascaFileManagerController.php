<?php namespace Neyromanser\LascaFileManager\Controller;

use Illuminate\Routing\Controller;
use Neyromanser\LascaFileManager\KcfinderModel;

class LascaFileManagerController extends Controller{

    protected $kcfinder;

    public function __construct() {
        //$this->kcfinder = $kcfinder;
    }

    public function connector(){
        KcfinderModel::connector();
    }

    public function jsLocalize($lang){
        $css = KcfinderModel::jsLocalize($lang);
    }

    public function browse(){
        KcfinderModel::browse();
    }
}
