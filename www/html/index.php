<?php
require_once __DIR__ . '/src/TemplateMethod/TemplateMethodClient.class.php';
require_once __DIR__ . '/src/Singleton/SingletonClient.class.php';
require_once __DIR__ . '/src/Adapter/AdapterClient.class.php';
require_once __DIR__ . '/src/Factory/FactoryClient.class.php';
require_once __DIR__ . '/src/Facade/FacadeClient.class.php';

/*
$templateMethod = new TemplateMethodClient();
$templateMethod->display();
*/
/*
$singleton = new SingletonClient();
$singleton->display();
*/
/*
$adapter = new AdapterClient();
$adapter->display();
*/
/*
$factory = new FactoryClient();
$factory->display();
*/
$facade = new FacadeClient();
$facade->display();


/* phpinfo(); */
