<?php
require_once("Autor.php");
require_once("Libro.php");
require_once("Revista.php");
require_once("ImprimirAutor.php");

// Crear autores
$autor1 = new Autor("Elena White", "EEUU");
$autor2 = new Autor("Gabriel Garcia", "Colombia");

// Crear libros
$libro1 = new Libro("El Gran Libro", $autor1);
$libro2 = new Libro("Aprendiendo PHP", $autor2);

// Crear revistas
$revista1 = new Revista("Revista Ciencia Hoy", $autor1, 5);
$revista2 = new Revista("Tecnología para Todos", $autor2, 3);

// Crear un arreglo de publicaciones (libros y revistas)
$publicaciones = [$libro1, $libro2, $revista1, $revista2];

// Iterar sobre el arreglo y mostrar info de cada publicación
foreach ($publicaciones as $publicacion) {
    $publicacion->getInfo();
    echo "<hr>";
}

// Usar ImprimirAutor para mostrar info de un autor
$imprimirAutor = new ImprimirAutor();
$imprimirAutor->getInfo($autor1);
$imprimirAutor->getInfo($autor2);
