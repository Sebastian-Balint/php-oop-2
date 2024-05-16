<?php

class Products
{
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;


    public function __construct(string $_nome, float $_prezzo, string $_immagine, string $_categoria)
    {
        $this->setName($_nome);
        $this->setPrezzo($_prezzo);
        $this->immagine = $_immagine;
        $this->categoria = $_categoria;
    }

    public function setName($_nome)
    {
        $this->nome = $_nome;
    }

    public function setPrezzo($_prezzo)
    {
        if ($_prezzo < 1) {
            throw new Exception('Il prezzo deve essere maggiore di 1 euro');
        }
        $this->prezzo = $_prezzo;
    }
}
