<?php 

class Movies{

    public $titolo;
    public $anno;
    public $lingua;
    public $regista;
    public $protagonista;
    public $classifica;

    function __construct($_titolo, $_anno, $_lingua, $_regista, $_protagonista){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->lingua = $_lingua;
        $this->regista = $_regista;
        $this->protagonista = $_protagonista;
    }

    public function setClassifica(){
        $this->classifica = 'Top 10 film del momento';
    }
}

$ForrestGump = new Movies('Forrest Gump', 1994, 'Inglese', 'Robert Zemeckis', 'Tom Hanks');
$Titanic = new Movies('Titanic', 1997, 'Inglese', 'James Cameron', 'Leonardo Di Caprio');
$Inception = new Movies('Inception', 2010, 'Inglese', 'Christopher Nolan', 'Leonardo Di Caprio');
$TheGodfather = new Movies('The Godfather', 1972, 'Inglese', 'Francis Ford Coppola', 'Marlon Brando, Al Pacino');
$Avatar = new Movies('Avatar', 2009, 'Inglese', 'James Cameron', 'Sam Worthington');

$ForrestGump->setClassifica();

var_dump($ForrestGump);

?>