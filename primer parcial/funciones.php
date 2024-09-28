<?php
// Clase Operaciones con los atributos a, b, c y sus métodos
class Operacion {
    private $a;
    private $b;
    private $c;

    // Constructor que inicializa los valores de a, b y c
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    // Método para sumar
    public function suma() {
        return $this->a + $this->b + $this->c;
    }

    // Método para restar
    public function resta() {
        return $this->a - $this->b - $this->c;
    }

    // Método para multiplicar
    public function multiplicacion() {
        return $this->a * $this->b * $this->c;
    }

    // Método para dividir
    public function division() {
        if ($this->b != 0 && $this->c != 0) {
            return $this->a / $this->b / $this->c;
        } else {
            return "Error: División por cero no permitida.";
        }
    }
}
?>
