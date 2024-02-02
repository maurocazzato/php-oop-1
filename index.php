<?php

class Movie {
    
    public $titolo;
    public $regista;
    public $anno;

    
    public function __construct($titolo, $regista, $anno) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->anno = $anno;
    }

    
    public function printInfo() {
        echo "Titolo: {$this->titolo}, Regista: {$this->regista}, Anno: {$this->anno}<br>";
    }
}


$movie1 = new Movie("Il Signore degli Anelli", "Peter Jackson", 2001);
$movie2 = new Movie("Inception", "Christopher Nolan", 2010);


echo "Informazioni del primo film:<br>";
$movie1->printInfo();

echo "<br>Informazioni del secondo film:<br>";
$movie2->printInfo();




?>
