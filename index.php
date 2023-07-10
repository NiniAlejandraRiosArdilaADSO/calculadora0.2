<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora0.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php 
$numero01 = "";
$numero02 = "";

if (isset($_POST['numero01'])) {
    $numero01 = isset($_POST['numero01']) ? $_POST['numero01'] : "";
    $numero02 = isset($_POST['numero02']) ? $_POST['numero02'] : "";
    $operador = isset($_POST['operador']) ? ($_POST['operador']) : "";
}
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1 class="h4">calculadora</h1>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="post" id="formulario">
                            <div class="form-group mb-3">
                                <label for="numero01" class="form-label">Primer número</label>
                                <input type="text" class="form-control" name="numero01" id="numero01" value="<?php echo $numero01 ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="numero02" class="form-label">Segundo número</label>
                                <input type="text" class="form-control" name="numero02" id="numero02" value="<?php echo $numero02 ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Operador</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="operador" id="suma" value="+">
                                    <label class="form-check-label" for="suma">sumar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="operador" id="resta" value="-">
                                    <label class="form-check-label" for="resta">restar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="operador" id="multiplicacion" value="*">
                                    <label class="form-check-label" for="multiplicacion">multiplicar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="operador" id="division" value="/">
                                    <label class="form-check-label" for="division">dividir</label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button id="btnenviar" type="submit" class="btn btn-primary">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body">
                        <?php 
                            include "operaciones.php";
                            validarCampos();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Validaciones -->
<script src="validar.js"></script>
</body>


</html>
