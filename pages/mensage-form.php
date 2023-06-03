<?php require_once __DIR__ . '/../pages/beginning-html.php'; ?>
<main>
    <h2 class="title">Escolha o Destinatário</h2>

    <form method="post" class="container mensage-form">
        <input type="text" name="nome" placeholder="Nome" class="form-input input-name" required>
        
        <select name="serie" class="form-input input">      
            <option value="1" class="input-option">1º ano</option>
            <option value="2" class="input-option">2º ano</option>
            <option value="3" class="input-option">3º ano</option>
            <option value="4" class="input-option">4º ano</option>
        </select>

        <select name="curso" class="form-input input">
            <option value="info" class="input-option">Informática</option>
            <option value="eletro" class="input-option">Eletromecânica</option>
        </select>

        <textarea name="mensagem" cols="30" rows="10" placeholder="Escreva Sua Mensagem..." class="form-input input-textarea" required></textarea>

        <button type="submit" class="form-button">Enviar</button>
    </form>
</main>

<?php require_once __DIR__ . '/../pages/end-html.php';