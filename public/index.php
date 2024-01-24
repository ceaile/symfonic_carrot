<?php
/* 
php bin/console cache:clear --no-warmup
en el caso de que salte un error de cache 
*/

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
