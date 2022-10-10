<?php
class Autoloader	
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $test = explode("\\", $class);
            if($test[0] == "App")
            {
                $test[0] = "src";   
            }
            $test = implode("\\", $test);
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $test).'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }	
}	
Autoloader::register();