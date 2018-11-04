<?php

$includeIfReadable = function($file) {
    return is_readable($file) ? include $file : false;
};

if ((!$loader = $includeIfReadable(__DIR__.'/../vendor/autoload.php')) && (!$loader = $includeIfReadable(__DIR__.'/../../../autoload.php'))) {
    echo 'You must set up the project dependencies, run the following commands:'.PHP_EOL.
        'curl -sS https://getcomposer.org/installer | php'.PHP_EOL.
        'php composer.phar install'.PHP_EOL;
    exit(1);
}

define('DEFAULT_ENV_DIRECTORY', dirname(__DIR__));

return $loader;