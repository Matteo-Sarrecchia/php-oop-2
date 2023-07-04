<?php

trait IngredientFood {

    private $ingredienti;

    public function getIngredienti(){

        return $this -> ingredienti;
    }

    public function setIngredienti($ingredienti){
        $this -> ingredienti = $ingredienti;
    }
}

class Cibo extends Product
{
    use IngredientFood;

    private $marca;
    private $peso;
    public function __construct(
        $immagine,
        $titolo,
        $descrizione,
        $prezzo,
        Categoria $categoria,
        $marca,
        $peso,
        $ingredienti
    ) 
    {
        parent::__construct(
            $immagine,
            $titolo,
            $descrizione,
            $prezzo,
            $categoria
        );
        
        $this -> setMarca($marca);
        $this -> setPeso($peso);

        $this -> setIngredienti($ingredienti);
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
}