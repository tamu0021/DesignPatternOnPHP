<?php
abstract class AbstractClient
{
    public function display()
    {
        $this->designPattern();
    }

    protected abstract function designPattern();
}