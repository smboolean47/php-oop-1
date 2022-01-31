<?php
trait Position {
    public $lat;
    public $lng;

    public function getAddress()
    {
        return "{$this->lat} {$this->lng}";
    }
}