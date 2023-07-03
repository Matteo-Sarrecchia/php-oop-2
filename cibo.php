<?php

class Cibo extends Product
{
    private $marca;
    private $peso;
    public function __construct(
        $immagine,
        $titolo,
        $descrizione,
        $prezzo,
        Categoria $categoria,
        $marca,
        $peso
    ) {
        parent::__construct(
            $immagine,
            $titolo,
            $descrizione,
            $prezzo,
            $categoria
        );
        $this->setMarca($marca);
        $this->setPeso($peso);
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