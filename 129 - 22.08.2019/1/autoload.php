<?php

spl_autoload_register(function($class) {
    $source ="App".DIRECTORY_SEPARATOR.str_replace('\\', DIRECTORY_SEPARATOR, $class).".php";

        if (file_exists($source)) {
            require_once $source;
        }
});

