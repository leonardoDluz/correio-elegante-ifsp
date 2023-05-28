<?php require_once __DIR__ . '/../pages/beginning-html.php'; ?>

<form method="post">
    <table border="1">
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>curso</th>
        <th>série</th>
        <th>conteudo</th>
        <th>status do pagamento</th>
    </tr>
    <?php foreach ($mensageList as $mensage) { ?>
        <tr>
            <td><?=$mensage['id'];?></td>
            <td><?=$mensage['name'];?></td>
            <td><?=$mensage['course'];?></td>
            <td><?=$mensage['grade'];?></td>
            <td><?=$mensage['content'];?></td>
            <td><?=$mensage['payment_status'];?></td>
            <td><input type="checkbox" name="pago"></td>
    </tr>
        <?php } ?>
    </table>
</form>

<?php require_once __DIR__ . '/../pages/end-html.php';