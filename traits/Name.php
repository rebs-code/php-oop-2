<?php

trait Name
{
    private $name;

    public function set_name($_name)
    {
        return $this->name = $_name;
    }

    public function get_name()
    {
        return $this->name;
    }
}
