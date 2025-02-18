<?php
class Petshop
{
    private $id = '';
    private $name = '';
    private $cattegory = '';
    private $price = '';
    private $picture = '';
    private $count = 0;

    // Constructor
    public function __construct($id, $name, $cattegory, $price, $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->cattegory = $cattegory;
        $this->price = $price;
        $this->count++;
        $this->picture = $picture;
    }

    // membuat setter dan getter
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategory($cattegory)
    {
        $this->cattegory = $cattegory;
    }

    public function getCategory()
    {
        return $this->cattegory;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public static function getCount()
    {
        return self::$count;
    }
}

?>
