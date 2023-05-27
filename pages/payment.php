<?php 

$pixCode = $payload->getPixCode();
$qrCode = $payload->getQRCode();

require_once __DIR__ . '/../pages/beginning-html.php'; ?>
<p><?=$pixCode;?></p>
<img style="width: 300px" src="<?=$qrCode;?>" alt="QR Code de Pagamento" />'

<?php require_once __DIR__ . '/../pages/end-html.php';
