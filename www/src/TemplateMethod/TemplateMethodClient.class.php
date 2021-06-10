<?php
require_once __DIR__ . '/ListDisplay.class.php';
require_once __DIR__ . '/TableDisplay.class.php';
require_once __DIR__ . '/../AbstractClient.class.php';

class TempleteMethodClient extends AbstractClient
{
    protected function designPattern()
    {
        $data = array(  'Design Pattern',
        'Gang of Four',
        'Template Method Sample1',
        'Template Method Sample2');

        $listDisplay = new ListDisplay($data);
        $tableDisplay = new TableDisplay($data);

        $listDisplay->display();
        echo '<hr>';
        $tableDisplay->display();
    }
}
