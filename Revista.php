<?php
require_once("Autor.php");
require_once("IPublicable.php");

class Revista implements IPublicable {
    private string $titulo;
    private Autor $autor;
    private int $numero;

    public function __construct(string $titulo, Autor $autor, int $numero) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numero = $numero;
    }

    public function getInfo(): void {
        echo "Revista: " . $this->titulo . "<br>";
        echo "Número de edición: " . $this->numero . "<br>";
        echo "Autor: " . $this->autor->getNombre() . " (" . $this->autor->getNacionalidad() . ")<br>";
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }
}

