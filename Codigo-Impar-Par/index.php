<h1>Verificador de números</h1>

<form method="POST">
    Entre com um número inteiro:
    <input type="number" name="number" />
    <input type="submit" value="Enviar" />
</form>

<?php
if (isset($_POST['number'])) {
    $resto = $_POST['number'] % 2;
    if ($resto == 0) {
        echo "O número ".$_POST['number']." é par.";
    } else {
        echo "O número ".$_POST['number']." é ímpar.";
    }
}