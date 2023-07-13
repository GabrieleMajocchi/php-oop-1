<?php 

class Movie {
    public $name;
    public $genre;
    public $discount;

    function __construct($name, $genre) {
        $this->name = $name;
        $this->genre = $genre;
    }

    public function discount() {
        if($eta < 16){
            $this->discount = 30;
        }else{
            $this->discount = 0;
        }
    }
}

?>