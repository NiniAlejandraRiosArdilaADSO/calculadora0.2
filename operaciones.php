<?php

include_once "clases.php";


function validar($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        return false;
    }
}

function mostrarError()
{
    echo "<span class='text-danger'>Ingresa solo números</span>";
}

function validarCampos()
{
    if (isset($_POST['numero01']) && isset($_POST['numero02']) && isset($_POST['operador'])) {
        $a = $_POST['numero01'];
        $b = $_POST['numero02'];
        $operador = $_POST['operador'];
        $clase = new oper;
        if (validar($a, $b)) {
            switch ($operador) {
                case '+':
                    echo $clase ->sumar($a, $b);
                    break;
                case '-':
                    echo $clase ->restar($a, $b);
                    break;
                case '*':
                    echo $clase -> multiplicar($a, $b);
                    break;
                case '/':
                    if ($a != 0 && $b != 0) {
                        echo $clase -> dividir($a, $b);
                    } else {
                        echo "Error: No se puede dividir por 0";
                    }
                    break;
            }
        } else {
            mostrarError();
        }
    }
}
