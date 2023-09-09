<div>
    <h1>Registro de Números</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="numero">Número:</label>
        <input type="number" name="numero" required><br>
        <input type="submit" value="Registrar">
    </form>

    <?php
    if ($_POST == TRUE) {
        // Lista de numeros no admitidos
        $numerosNoAdmitidos = array(2, 5, 9, 11);
        
        $numero = $_POST["numero"];
        $proximoNumero = $numero + 2;

        if (!in_array($numero, $numerosNoAdmitidos)) {
            echo $numero;
        }

        echo '<br>';

        if (!in_array($proximoNumero, $numerosNoAdmitidos)) {
            echo $proximoNumero;
        }
    }
    ?>
</div>