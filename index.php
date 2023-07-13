<?php 

class Movie {
    public $name;
    public $genre;
    public $discount;

    function __construct($name, $genre) {
        $this->name = $name;
        $this->genre = $genre;
    }

    public function discount($age) {
        if($age < 16){
            $this->discount = 30;
        }else{
            $this->discount = 0;
        }
    }
}

$client1 = new Movie('Mission impossible', 'Action');
$client1->discount(25);
var_dump($client1);

$client2 = new Movie('Back to the future', 'Science fiction comedy');
$client2->discount(15);
var_dump($client2);

?>
