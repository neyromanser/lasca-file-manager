<?php

namespace Neyromanser\LascaFileManager;

use Neyromanser\LascaFileManager\Kcfinder\browser;
use Neyromanser\LascaFileManager\Kcfinder\uploader;
use Neyromanser\LascaFileManager\Kcfinder\minifier;

class KcfinderModel{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    static function browse(){

        //$browser = "kcfinder\\browser"; // To execute core/bootstrap.php on older
        $browser = new browser();      // PHP versions (even PHP 4)
        $browser->action();

        return '';
    }

    static function connector(){

        //$browser = "kcfinder\\browser"; // To execute core/bootstrap.php on older
        $upload = new uploader();      // PHP versions (even PHP 4)
        $upload->upload();

        return '';
    }

    static function css($theme = false){
        $min = new minifier("css");
        //$path = public_path(Config('lasca-file-manager.route_prefix') . '/cache');
        $path = __DIR__ . '/kcfinder/css';
        $min->minify(Config('lasca-file-manager.route_prefix')."/cache/".($theme ? "theme_$theme" : 'base').".css", $path);
    }

    static function js($theme = false){
        $min = new minifier("js");
        //$path = public_path(Config('lasca-file-manager.route_prefix') . '/cache');
        $path = __DIR__ . '/kcfinder/js';
        $min->minify(Config('lasca-file-manager.route_prefix')."/cache/".($theme ? "theme_$theme" : 'base').".js", $path);
    }

    static function jsLocalize($lang){
        $langDir = __DIR__ . '/kcfinder/lang';
        $file = "$langDir/$lang.php";
        $mtime = @filemtime($file);
        if(file_exists($file)) {
            require $file;
        }

        header("Content-Type: text/javascript");

        echo "_.labels={";

        $i = 0;
        foreach ($lang as $english => $native) {
            if (substr($english, 0, 1) != "_") {
                echo "'" . \Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($english) . "':\"" . \Neyromanser\LascaFileManager\Kcfinder\helper_text::jsValue($native) . "\"";
                if (++$i < count($lang))
                    echo ",";
            }
        }

        echo "}";
    }
}
