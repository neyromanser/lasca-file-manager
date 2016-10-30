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
        $browser = new browser();
        $browser->action();
    }

    static function connector(){
        $upload = new uploader();
        $upload->upload();
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
