<?php

class iPhone
{
    // Properties
    public $color;
    public $storage;

    // Constructor
    public function __construct($color, $storage)
    {
        $this->color = $color;
        $this->storage = $storage;
    }

    // Method getColor()
    public function getColor()
    {
        return $this->color;
    }

    // Method getStorage()
    public function getStorage()
    {
        return $this->storage;
    }
}
?>