<?php require_once __DIR__ . '/../pages/beginning-html.php'; ?>
<main>
    <form method="post" class="container login-form">
        <input type="text" name="username" placeholder="Username" class="form-input" require>
        
        <input type="password" name="password" placeholder="Senha" class="form-input" require>
        
        <button type="submit" class="form-button">Entrar</button>
    </form>
</main>

<?php require_once __DIR__ . '/../pages/end-html.php';
