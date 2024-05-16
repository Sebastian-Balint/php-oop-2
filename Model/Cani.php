<?php

class ProductCane extends Products
{
    public $taglia;

    // creo funzione costruttore ereditando le variabili della classe genitore (products)
    function __construct(string $_nome, float $_prezzo, string $_immagine, string $_categoria, string $_taglia)
    {
        // eredito la funzione costruttore del genitore senza riscriverla, questo al posto di scrivere $this
        parent::__construct($_nome, $_prezzo, $_immagine, $_categoria);

        // aggiungo alla funzione costruttore del genitore -> $_taglia;
        $this->taglia = $_taglia;
    }
}
