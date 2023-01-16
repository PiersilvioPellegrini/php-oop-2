<?php

require_once __DIR__ . "/Products.php";

class Categories extends Products {
    protected string $type;
    protected string $category;
    protected string $icon;


    function __construct($name_product,$image,$price,$_type,$_icon,$_category)
    {
        // inserisco i dati della clase padre 
         parent:: __construct($name_product,$image, $price);

        $this->setType($_type);
        $this->setIcon($_icon);
        $this->setCategory($_category);


    }


    

    /**
     * Get the value of icon
     */ 
    public function getIcon()
    {
        if($this->category === "cane"){
            return "fa-solid fa-dog";
        }else{
            return "fa-solid fa-cat";
        }
        
    }

    /**
     * Set the value of icon
     *
     * @return  self
     */ 
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}
?>