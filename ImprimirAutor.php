<?php
require_once("Autor.php");

class ImprimirAutor {
    public function getInfo(Autor $autor): void {
        echo "Nombre: " . $autor->getNombre() . "<br>";
        echo "Nacionalidad: " . $autor->getNacionalidad() . "<br>";
    }
}

