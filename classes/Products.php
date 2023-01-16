<?php

class Products {
    protected string $name_product;
    protected string $image;
    private int $price;






    function __construct($_name_product,$_image, $_price)
    {
        $this-> setName_product($_name_product);
        $this-> setImage($_image);
        $this-> setPrice($_price);

    }

    /**
     * Get the value of name_product
     */ 
    public function getName_product()
    {
        return $this->name_product;
    }

    /**
     * Set the value of name_product
     *
     * @return  self
     */ 
    public function setName_product($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}

?>