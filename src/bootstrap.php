<?php
require_once ".../vendor/autoload.php";
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
$paths = array("./src");
$isDevMode = true;

$dbParams = array(
    /* en mi casa ceaile:1234@127.0.0.1:3306/symfonic_carrotflix? */
    'driver' => 'pdo_mysql',
    'user' => 'root', /* ? */
    'password' => 'root', /* ? */
    'dbname' => 'symfonic_carrot', /* ? */
    'host' => 'localhost'
);
$config =  Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);




