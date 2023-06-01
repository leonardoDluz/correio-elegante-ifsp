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
        <th>tipo</th>
    </tr>

    <?php foreach ($mensageList as $mensage) { ?>
        
    <tr class="data-row">
        <td class="id"><?=$mensage['id'];?></td>
        <td><?=$mensage['name'];?></td>
        <td><?=$mensage['course'];?></td>
        <td><?=$mensage['grade'];?></td>
        <td><?=$mensage['content'];?></td>
        <td><?=$mensage['payment_status'];?></td>
        <td><?=$mensage['type'];?></td>

        <?php if ($mensage['payment_status'] === 'pendente') { ?>
            
        <td class="payment-status"><input type="checkbox" name="payment:<?=$mensage['id'];?>" value="<?= $mensage['id'];?>"></td>

        <?php } ?>
    </tr>
    <?php } ?>
    </table>
    <button type="submit">Confirmar Pagamento</button>
</form>

<?php require_once __DIR__ . '/../pages/end-html.php';