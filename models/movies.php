<?php 

include_once __DIR__ . '/genres.php';

class Movies{

    public $titolo;
    public $anno;
    public $lingua;
    public $regista;
    public $protagonista;
    public $classifica;
    public $generi;

    function __construct($_titolo, $_anno, $_lingua, $_regista, $_protagonista, Genres $_genres){
        $this->titolo = $_titolo;
        $this->anno = $_anno;
        $this->lingua = $_lingua;
        $this->regista = $_regista;
        $this->protagonista = $_protagonista;
        $this->generi = $_genres;
    }

    public function setClassifica(){
        $this->classifica = 'Top 10 film del momento';
    }
}


?>