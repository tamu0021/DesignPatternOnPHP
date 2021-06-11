<?php
require_once __DIR__ . '/Order.class.php';
require_once __DIR__ . '/ItemDao.class.php';
require_once __DIR__ . '/OrderDao.class.php';

class OrderManager
{
    public static function order(Order $order) {
        $item_dao = ItemDao::getInstance();
        foreach ($order->getItems() as $order_item) {
            $item_dao->setAside($order_item);
        }

        OrderDao::createOrder($order);
    }
}