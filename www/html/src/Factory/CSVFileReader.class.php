<?php
require_once __DIR__ . '/Reader.class.php';

/**
 * CSVファイルの読み込みを行うクラス
 */
class CSVFileReader implements Reader
{
    /**
     * 内容を表示するファイル
     * @access private
     */
    private $filename;

    /**
     * データを扱うハンドラ
     * @access private
     */
    private $handler;

    /**
     * コンストラクタ
     * @param string ファイル名
     * @throws Exception
     */
    public function __construct($filename)
    {
        if (!is_readable($filename)) {
            throw new Exception('file "' . $filename . '" is not readable !');
        }
        $this->filename = $filename;
    }

    /**
     * 読み込みを行う
     */
    public function read()
    {
        $this->handler = fopen ($this->filename, "r");
    }

    /**
     * 表示を行う
     */
    public function display()
    {
        $column = 0;
        $tmp = "";
        while ($data = fgetcsv ($this->handler, 1000, ",")) {
            $num = count ($data);
            for ($c = 0; $c < $num; $c++) {
                if ($c == 0) {
                    if ($column != 0 && $data[$c] != $tmp) {
                        echo "</ul>";
                    }
                    if ($data[$c] != $tmp) {
                        echo "<b>" . $data[$c] . "</b>";
                        echo "<ul>";
                        $tmp = $data[$c];
                    }
                }
                else {
                    echo "<li>";
                    echo $data[$c];
                    echo "</li>";
                }
            }
            $column++;
        }
        echo "</ul>";
        fclose ($this->handler);
    }
}



