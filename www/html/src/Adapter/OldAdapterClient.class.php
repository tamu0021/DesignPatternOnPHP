<?php
require_once __DIR__ . '/ShowFile.class.php';
require_once __DIR__ . '/../AbstractClient.class.php';

class AdapterClient extends AbstractClient
{
    protected function designPattern()
    {
        /**
         * ShowFileクラスをインスタンス化する。
         * 内容を表示するファイルは、「ShowFile.class.php」
         */
        try {
            $show_file = new ShowFile(__DIR__ . '/ShowFile.class.php');
        }
        catch (Exception $e) {
            die($e->getMessage());
        }

        /**
         * プレーンテキストとハイライトしたファイル内容をそれぞれ
         * 表示する
         */
        $show_file->showPlain();
        echo '<hr>';
        $show_file->showHighlight();
    }
}
