<?php
$dotenv = new \Dotenv\Dotenv(PROJECT_DIR);
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

