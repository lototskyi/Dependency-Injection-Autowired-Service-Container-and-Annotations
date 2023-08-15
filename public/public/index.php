<?php
declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

use App\Kernel;

print_r("Dependency Injection, Autowired Service Container and Annotations\n\n");

$kernel = new Kernel();
$kernel->boot();
$container = $kernel->getContainer();

var_dump($container->getServices());
var_dump($container->getService('App\\Controller\\IndexController')
    ->index());
var_dump($container->getService('App\\Controller\\PostController')
    ->index());