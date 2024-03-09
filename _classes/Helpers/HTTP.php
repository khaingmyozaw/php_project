<?php

namespace Helpers;

class HTTP {
    static $base = "http://localhost/php_project/";
    static function headTo($path, $q="")
    {
        $url = static::$base . $path;
        header("Location: $url");
        if($q) {
            $url .= "?$q";
            header("Location: $url");
        }
    }
}