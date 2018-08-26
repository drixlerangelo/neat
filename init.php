<?php

define('__ROOT__', dirname(__FILE__));

spl_autoload_register('autoloader');

function autoLoader($sClass, $sDir = __ROOT__) {
    foreach(scandir($sDir) as $sContent) {
        if(is_dir($sContent) && substr($sContent, 0, 1) !== '.') {
            autoLoader($sClass, $sDir . '\\' . $sContent . '\\');
        } else {
            $sExtension = pathinfo($sContent, PATHINFO_EXTENSION);
            if($sExtension === 'php') {
                $sFileName = str_replace('.' . $sExtension, '', $sContent);

                if($sFileName === $sClass) {
                    require_once $sDir . $sContent;
                }
            }
        }
    }
}