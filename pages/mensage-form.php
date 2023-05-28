<?php require_once __DIR__ . '/../pages/beginning-html.php'; ?>

<form method="post">
    <input type="text" name="nome">

    <select name="serie">
        <option value="1">1º ano</option>
        <option value="2">2º ano</option>
        <option value="3">3º ano</option>
        <option value="4">4º ano</option>
    </select>

    <select name="curso">
        <option value="info">Informática</option>
        <option value="eletro">EletroMecânica</option>
    </select>

    <textarea name="mensagem" cols="30" rows="10"></textarea>

    <button type="submit">Enviar</button>
</form>

<?php require_once __DIR__ . '/../pages/end-html.php';