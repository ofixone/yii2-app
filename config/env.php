<?php
require_once PROJECT_DIR . "/vendor/autoload.php";

$dotenv = new \Dotenv\Dotenv(__DIR__ . "/..");
$dotenv->load();

if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key) ?? $_ENV[$key] ?? $_SERVER[$key];
        if ($value === false) {
            return $default;
        }
        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
        }
        return $value;
    }
}

defined('YII_DEBUG') or define('YII_DEBUG', env('YII_DEBUG', true));
defined('YII_ENV') or define('YII_ENV', env('YII_ENV', 'dev'));