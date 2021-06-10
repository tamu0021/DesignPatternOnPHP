<?php
require_once __DIR__ . '/DisplaySourceFileImpl.class.php';
require_once __DIR__ . '/../AbstractClient.class.php';

class AdapterClient extends AbstractClient
{
    protected function designPattern()
    {
        /**
         * DisplaySourceFileImplクラスをインスタンス化する。
         * 内容を表示するファイルは、「ShowFile.class.php」
         */
        try {
            $show_file = new DisplaySourceFileImpl(__DIR__ . '/ShowFile.class.php');
        }
        catch (Exception $e) {
            die($e->getMessage());
        }

        /**
         * プレーンテキストとハイライトしたファイル内容をそれぞれ
         * 表示する
         */
        $show_file->display();
    }
}
