<?php

trait Name
{
    private $name;

    public function set_Name($_name)
    {
        return $this->name = $_name;
    }

    public function get_Name()
    {
        return $this->name;
    }
}
