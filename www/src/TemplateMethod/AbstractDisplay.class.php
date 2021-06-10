<?php
/**
 * AbstractClassに相当する。
 */
abstract class AbstractDisplay
{
    /**
     * 表示するデータ
     */
    private $data;

    /**
     * コンストラクタ
     * @param mixed 表示するデータ
     */
    public function __construct($data)
    {
        if (!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    /* 以下TemplateMethod */
    /**
     * 画面を表示する。
     */
    public function display()
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    /**
     * データを取得する
     */
    public function getData()
    {
        return $this->data;
    }
    /* ここまでTeamplateMethod */

    /* 以下PrimitiveOperation */
    /**
     * ヘッダを表示する。
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayHeader();

    /**
     * ボディ(クライアントから渡されたデータ)を表示する。
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayBody();

    /**
     * フッタを表示する。
     * サブクラスに実装を任せる抽象メソッド
     */
    protected abstract function displayFooter();
    /* ここまでPrimitiveOperation */
}