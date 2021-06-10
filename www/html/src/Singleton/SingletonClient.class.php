<?php
require_once __DIR__ . '/Singleton.class.php';
require_once __DIR__ . '/../AbstractClient.class.php';

class SingletonClient extends AbstractClient
{
    protected function designPattern()
    {
        /**
         * インスタンスを2つ取得する。
         */
        $instance1 = Singleton::getInstance();
        sleep(1);
        $instance2 = Singleton::getInstance();

        echo '<hr>';

        /**
         * 2つのインスタンスのIDが同一かどうかを確認する。
         */
        echo 'instance ID : ' . $instance1->getID() . '<br>';
        echo '$instance1->getID() === $instance2->getID() : ' . ($instance1->getID() === $instance2->getID() ? 'true' : 'false');
        echo '<hr>';

        /**
         * 2つのインスタンスが同一かどうかを確認する
         */
        echo '$instance1 === $instance2 : ' . ($instance1 === $instance2 ? 'true' : 'false');
        echo '<hr>';

        /**
         * 複製できないことを確認する
         */
        $instance1_clone = clone $instance1;
    }
}