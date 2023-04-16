<?php
spl_autoload_register ( function ($class) {
    $sources = array("controllers/$class.php",
    "core/$class.php",
    "models/$class.php",
    "DAO/$class.php",
    "controllers/$class.php",
    "classes/$class.php");
     foreach ($sources as $source) {
        if (file_exists($source)) {
             require_once $source;
        } 
     } 
});