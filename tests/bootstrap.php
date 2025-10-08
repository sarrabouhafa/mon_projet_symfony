<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (method_exists(Dotenv::class, 'bootEnv')) {
    (new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
}
<<<<<<< HEAD

if ($_SERVER['APP_DEBUG']) {
    umask(0000);
}
=======
>>>>>>> bc36c7eda1c65bfa3ceead6ff712c986f06cb49c
