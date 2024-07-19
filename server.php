<?php

declare(strict_types=1);
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ('/' !== $uri && file_exists(__DIR__ . '/public' . $uri)) {
    return false;
}

require_once __DIR__ . '/public/index.php';
<<<<<<< HEAD
//require_once __DIR__ . '/index.php';
=======
// require_once __DIR__ . '/index.php';
>>>>>>> 3f1f8ac (feat: [SSP-5] base layout_home)
