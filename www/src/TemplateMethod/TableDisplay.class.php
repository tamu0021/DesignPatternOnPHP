<?php
require_once __DIR__ . '/AbstractDisplay.class.php';

/**
 * ConcreteClass
 */
class TableDisplay extends AbstractDisplay
{
    /**
     * ヘッダを表示する
     */
    protected function displayHeader()
    {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    /**
     * ボディ（クライアントから渡された内容）を表示する
     */
    protected function displayBody()
    {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    /**
     * フッタを表示する
     */
    protected function displayFooter()
    {
        echo '</table>';
    }
}