<?php

class Product
{
    protected $id;
    protected $name;
    protected $sectors;
    protected $price;
    protected $amount;
    protected $created;
    protected $teaser;


    public function __construct($name, $sectors, $price, $amount, $created, $teaser) {
        $this->name = $name;
        $this->sectors = $sectors;
        $this->price = $price;
        $this->amount = $amount;
        $this->created = $created;
        $this->teaser = $teaser;
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of sectors
     */ 
    public function getSectors()
    {
        return $this->sectors;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get the value of created
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get the value of teaser
     */ 
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}