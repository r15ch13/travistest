<?php
/**
* Wurst!!
*/
class Wurst
{
    private $_name = "";

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function Name()
    {
        return $this->_name;
    }
}
