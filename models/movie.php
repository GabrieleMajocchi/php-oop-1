<?php 

class Movie {
    public $name;
    public $genres;
    public $discount;

    function __construct($name, $genres) {
        $this->name = $name;
        $this->genres = $genres;
    }

    public function discount($age) {
        if($age < 16){
            $this->discount = 30;
        }else{
            $this->discount = 0;
        }
    }
}
?>
