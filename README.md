# correio-elegante-ifsp
o correio elegante ifsp é um site onde você poderá enviar anonimamente um correio elegante para qualquer aluno do ensino médio integrado do ifsp câmpus Itapetininga

### Configurações Composer
para iniciar o projeto abra o terminal rode um `composer dumpautoload` e em seguida `composer require piggly/php-pix --ignore-platform-reqs` 

### Configurações banco de dados
para configurar o banco de dados crie as tabelas com os seguintes comandos sql
```sql
CREATE TABLE mensages (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    content TEXT,
    name VARCHAR(45) NOT NULL,
    course VARCHAR(6) NOT NULL,
    grade CHAR(1) NOT NULL,
    payment_status VARCHAR(6) NOT NULL,
    type VARCHAR(12) NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT NOT  NULL PRIMARY KEY,
    user_name VARCHAR(55) NOT NULL,
    password TEXT NOT NULL
);
```

e crie um arquivo na pasta 'config' do projeto chamado: `config-database.php` siga o modelo abaixo pra inicia-lo
```php
<?php

self::setHost(YOUR_HOST);
self::setDbName(YOUR_DATABASE);
self::setUser(YOUR_USER);
self::setPassword(YOUR_PASSWORD);

```
### Rodar o projeto localmente

para rodar o projeto localmente entre na pasta public, abra o terminar e rode o comando `php -S localhost:8080`