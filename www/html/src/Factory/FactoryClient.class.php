<?php
require_once __DIR__ . '/ReaderFactory.class.php';
?>
<html lang="ja">
<head>
<title>作曲家と作品たち</title>
</head>
<body>
<?php
class FactoryClient extends AbstractClient
{
    protected function designPattern()
    {
        /**
         * 外部からの入力ファイルです
         */
        $filename = __DIR__ . '/Music.csv';

        $factory = new ReaderFactory();
        $data = $factory->create($filename);
        $data->read();
        $data->display();
    }
}
?>
</body>
</html>