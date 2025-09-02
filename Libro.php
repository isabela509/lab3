<?php
require_once("Autor.php");
require_once("IPublicable.php");

class Libro implements IPublicable {
    private string $titulo;
    private Autor $autor;

    public function __construct(string $titulo, Autor $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getInfo(): void {
        echo "Libro: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor->getNombre() . " (" . $this->autor->getNacionalidad() . ")<br>";
    }
}


