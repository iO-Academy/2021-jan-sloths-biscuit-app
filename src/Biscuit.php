<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class Biscuit
{
    protected string $name;
    protected string $img;
    protected string $RDT;
    protected string $description;
    protected string $wikipedia;

    //getter methods
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
