<?php

namespace VictorBuild\TestPackage;

class Sum
{
    private $result;

    public function __construct($a="", $b="")
    {
        $this->result = $a + $b;
    }
    public function result()
    {
        return $this->result;
    }
}
