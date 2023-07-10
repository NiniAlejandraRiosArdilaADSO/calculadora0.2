<?php

class oper {
    public function sumar($a, $b){
        if ($a > 0) {
            return $a + $b;
        }
    }

    public function restar($a, $b){
        return $a - $b;
    }

    public function multiplicar($a, $b){
        return $a * $b;
    }

    public function division($a, $b){
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Error: no se permite division por cero";
        }
    }
}