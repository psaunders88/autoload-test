<?php

spl_autoload_register(function($class) {
    /**
     * Remove the top level from the namespace
     * Todo: Get the top level as configuration
     */
    $class = str_replace('App', '', $class);
    
    /**
     * Include the file from the src dir.
     * Todo: Get 'src' as configuration 
     */
    include __DIR__ . '/../src/' . str_replace('\\', '/', $class) . '.php';
});