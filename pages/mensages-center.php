<?php require_once __DIR__ . '/../pages/beginning-html.php';?>
<main>
    <form method="post">
        <table>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>curso</th>
            <th>série</th>
            <th>conteudo</th>
            <th>tipo</th>
            <th>data</th>
            <th>hora</th>
            <th>status do pagamento</th>
        </tr>

        <?php foreach ($mensageList as $mensage) { ?>
            
        <tr class="data-row">
            <td class="id"><?=$mensage['id'];?></td>
            <td><?=$mensage['name'];?></td>
            <td><?=$mensage['course'];?></td>
            <td><?=$mensage['grade'];?></td>
            <td><?=$mensage['content'];?></td>
            <td><?=$mensage['type'];?></td>
            <td><?=$mensage['date'];?></td>
            <td><?=$mensage['hours'];?></td>
            <td class="<?=$mensage['payment_status'] === 'pago' ? 'pago':'';?>"><?=$mensage['payment_status'];?></td>

            <?php if ($mensage['payment_status'] === 'pendente') { ?>
                
            <td class="payment-status"><input type="checkbox" name="payment:<?=$mensage['id'];?>" value="<?= $mensage['id'];?>"></td>

            <?php } ?>
        </tr>

        <?php } ?>
        </table>
        <button type="submit" class="form-button">Confirmar Pagamento</button>
    </form>
</main>
<?php require_once __DIR__ . '/../pages/end-html.php';