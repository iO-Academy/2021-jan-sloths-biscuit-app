<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class Biscuit
{
    protected string $name;
    protected string $img;
    protected string $RDT;
    protected string $desc;
    protected string $wikipedia;

    public function getName(): string
    {
        return $this->name;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function getRDT(): int
    {
        return $this->RDT;
    }
}