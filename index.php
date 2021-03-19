<?php/*
/*2 - Faça um site que peça um número inteiro e determine se ele é par ou ímpar.
Dica: utilize o operador módulo (resto da divisão): %. Depois peça um número e
um múltiplo, e responda se o número digitado é múltiplo do segundo valor digitado*/
?>

<h1>Verificar se um número é par ou ímpar</h1>

<form method="POST">
    Digite um número inteiro:
    <input type="number" name="number" />
    <input type="submit" value="Enviar" />
</form>

<?php
if (isset($_POST['number'])) {
    $resto = $_POST['number'] % 2;
    if ($resto == 0) { echo "O número ".$_POST['number']." é par.";} 
    else {
        echo "O número ".$_POST['number']." é ímpar.";
    }
}
