<?php

trait PesoGioco {

    private $weight;

    public function getWeight() {

        return $this -> weight;
    }
    public function setWeight($weight) {

        if ($weight <= 0) {

            throw new Exception("Weight can't be negative");
        }

        $this -> weight = $weight;
    }
}

class Giochi extends Product
{

    use PesoGioco;

    private $materiale;
    private $colore;

    public function __construct(
        $immagine,
        $titolo,
        $descrizione,
        $prezzo,
        Categoria $categoria,
        $materiale,
        $colore,
        $weight)
    {

        parent::__construct(
            $immagine,
            $titolo,
            $descrizione,
            $prezzo,
            $categoria
        );

        $this->setMateriale($materiale);
        $this->setColore($colore);

        $this -> setWeight($weight);

    }


    public function getMateriale()
    {

        return $this -> materiale;
    }
    public function setMateriale($materiale)
    {

        $this -> materiale = $materiale;
    }

    public function getColore()
    {

        return $this -> colore;
    }
    public function setColore($colore)
    {

        $this -> colore = $colore;
    }
}