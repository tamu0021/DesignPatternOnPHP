<?php
require_once __DIR__ . '/src/TemplateMethod/TemplateMethodClient.class.php';
require_once __DIR__ . '/src/Singleton/SingletonClient.class.php';
require_once __DIR__ . '/src/Adapter/AdapterClient.class.php';

/*
$templateMethod = new TemplateMethodClient();
$templateMethod->display();
*/
/*
$singletonMethod = new SingletonClient();
$singletonMethod->display();
*/
$adapterMethod = new AdapterClient();
$adapterMethod->display();
/* phpinfo(); */
