<?php

namespace App\Table;

class Burger{

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
    
    public function getUrl(){
        return 'index.php?p=burger&id=' . $this->id_burger;
    }

    public function getDescriptionBurger(){
        $html = '<p>' . $this->description_burger . '</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Decouvrir !</a></p>';
        return $html;
    }

}

