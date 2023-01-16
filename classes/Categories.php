<?php

require_once __DIR__ . "/Products.php";

class Categories extends Products {
    protected string $name;
    protected string $icon;



    function __construct($_name,$_icon)
    {
        // inserisco i dati della clase padre 
        // parent::__costructor();

        $this->setName($_name);
        $this->setIcon($_icon);

    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of icon
     */ 
    public function getIcon()
    {
        return $this->icon;
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
}
?>