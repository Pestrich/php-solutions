<?php

trait Test
{
    public function test()
    {
        return [1, 2, 3];
    }
}

final class TestClass
{
    use Test;

    public function __construct()
    {
        echo "<pre>";
        print_r($this->test());
        echo "</pre>";
    }
}

$test = new TestClass();
