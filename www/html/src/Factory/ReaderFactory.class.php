<?php
require_once __DIR__ . '/Reader.class.php';
require_once __DIR__ . '/CSVFileReader.class.php';
require_once __DIR__ . '/XMLFileReader.class.php';

/**
 * Readerクラスのインスタンス生成を行うクラス
 */
class ReaderFactory
{
    /**
     * Readerクラスのインスタンスを生成
     */
    public function create($filename)
    {
        return $this->createReader($filename);
    }

    /**
     * Readerクラスのサブクラスを条件判定し、インスタンス生成
     */
    private function createReader($filename)
    {
        $poscsv = stripos($filename, '.csv');
        $posxml = stripos($filename, '.xml');

        if ($poscsv !== false) {
            return new CSVFileReader($filename);
        }
        elseif ($posxml !== false) {
            return new XMLFileReader($filename);
        }
        else {
            diw('This filename is not supported : ' . $filename);
        }
    }
}
