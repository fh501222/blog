<?php

spl_autoload_register('my_autoload');
function my_autoload($className)
{
    $paths = array(
        'Controller' => 'Controller/', 'Model' => 'Model/', 'Db' => 'Db/', 'Classes' => 'Classes/','Admin' => 'Admin_login/'
    );

    foreach ($paths as $path) {
        if (file_exists($full_path = $path . $className . '.php')) {
            require_once $full_path;
        }
    }
}

session_start();
