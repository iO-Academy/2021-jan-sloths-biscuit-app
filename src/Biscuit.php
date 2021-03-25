<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class Biscuit
{
    protected $name;
    protected $img;
    protected $RDT;
    protected $description;
    protected $wikipedia;
    protected $ID;


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

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getWikipedia()
    {
        return $this->wikipedia;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }
}
