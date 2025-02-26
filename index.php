<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comentaris</title>
</head>
<body>
    <h2>Deixa un comentari:</h2>
    <form method="POST">
        <input type="text" name="comentari" placeholder="Escriu aquí...">
        <button type="submit">Enviar</button>
    </form>

    <h3>Comentaris anteriors:</h3>
    <?php
    if (isset($_POST['comentari'])) {
        $comentari = $_POST['comentari'];
        echo "<p><strong>Usuari:</strong> $comentari</p>";
    }
    ?>
</body>
</html>
