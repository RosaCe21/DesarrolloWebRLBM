<?php
// echo "la suma es: " . $a+$b;
class Calculadora {

    public $a;
    public $b;
    
    public function __construct($a, $b) {
        $this->a = $_GET["numero1"];
        $this->b = $_GET["numero2"];
    }
    
    public function sumar() {
        return $this->a + $this->b;
    }
    
    public function restar() {
        return $this->a - $this->b;
    }
    
    public function multiplicar() {
        return $this->a * $this->b;
    }
    
    public function dividir() {
        if ($this->b != 0) {
            return $this->a / $this->b;
        } else {
            return "No se puede dividir por cero.";
        }
    }
}
?>
