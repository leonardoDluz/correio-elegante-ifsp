<?php require_once __DIR__ . '/../pages/beginning-html.php'; ?>
<main>
    <div class="container pay-container">
        <img class="pix-qr-code" src="<?=$qrCode;?>" alt="QR Code de Pagamento" />

        <span id="pix-code"><?=$pixCode;?></span>

        <button class="copy-button">
            Copiar Código

            <span id="copy-icon" class="material-symbols-outlined">
                content_copy
            </span>
        </button>

        <a class="form-button" href="/menu">Enviar outra mensagem</a>
    </div>
</main>

<script src="js/copy-pix-code.js"></script>
    
<?php require_once __DIR__ . '/../pages/end-html.php';
