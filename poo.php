<?php

class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

    public function imprimir(){}
}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct()
    {
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaRepositorio = 0.0;
        

    }

    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Nota portfolio :" . $this->notaPortfolio . "<br>";
        echo "Nota Php: " . $this->notaPhp . "<br>";
        echo "Nota Proyecto: " . $this->notaProyecto . "<br>" ;
        echo "Promedio: " . $this->calcularPromedio(). "<br>";
    }
    
    public function calcularPromedio(){
        
        $promedio = 0;
        return ($this->notaPhp + $this->notaPortfolio + $this->notaProyecto) /3;

         
    }
    
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){}
}

$alumno1 = new Alumno();
$alumno1->dni = "35115485";
$alumno1->nombre = "dante";
$alumno1->edad = 25;
$alumno1->nacionalidad = "argentina";
$alumno1->notaPhp = 9;
$alumno1->notaPortfolio = 7;
$alumno1->notaProyecto = 8;
$alumno1->imprimir();



?>