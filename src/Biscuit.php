<?php

namespace BiscuitApp;

class Biscuit
{
    protected $name;
    protected $img;
    protected $RDT;
    protected $description;
    protected $wikipedia;


    public function getName(): string
    {
        return $this->name;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function getRDT(): string
    {
        return $this->RDT;
    }
}
