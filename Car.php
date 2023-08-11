<?php


class Car
{
    public $model;

    private $carCode;

    public function getCode()
    {
        return $this->carCode;
    }

    public function openCar($pass)
    {
        if($this->carCode == $pass) {
            return "open the car";
        } else {
            return "errror";
        }
    }

    public function setCode($newCode)
    {
        $this->carCode = sha1($newCode) ;
    }
}
