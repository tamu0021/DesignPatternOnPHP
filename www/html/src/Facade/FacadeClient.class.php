<?php
require_once __DIR__ . '/Order.class.php';
require_once __DIR__ . '/OrderItem.class.php';
require_once __DIR__ . '/ItemDao.class.php';
require_once __DIR__ . '/OrderManager.class.php';

class FacadeClient extends AbstractClient
{
    protected function designPattern()
    {
        $order = new Order();
        $item_dao = ItemDao::getInstance();

        $order->addItem(new OrderItem($item_dao->findById(1), 2));
        $order->addItem(new OrderItem($item_dao->findById(2), 1));
        $order->addItem(new OrderItem($item_dao->findById(3), 3));

        /**
         * 注文処理は以下1行のみ
         */
        OrderManager::order($order);
    }
}
