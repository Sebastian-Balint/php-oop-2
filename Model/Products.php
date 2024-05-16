<?php

class Products
{
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;


    public function __construct(string $_nome, float $_prezzo, string $_immagine, string $_categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->categoria = $_categoria;
    }
}
