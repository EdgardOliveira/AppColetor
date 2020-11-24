# APIColetor
Aplicação desenvolvida na linguagem PHP v7.2 com Laravel Framework v7.
É um backend responsável por autenticar usuários da aplicação móvel de coleta de dados.
Uma vez autenticado, o usuários poderá fazer requisições de dados da API.

### Requisitos
1. PHP 7.3
2. MariaDB
3. Composer

Eu uso o xampp ;)

### Procedimento de instação
```bash
composer install -o --no-dev
```
Configurar o .env

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coletor
DB_USERNAME=coletor
DB_PASSWORD=coletor
```
É preciso criar o banco de dados no mysql e usuário com privilégios
```bash
CREATE USER 'coletor'@'%' IDENTIFIED VIA mysql_native_password 
USING '***';GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, 
FILE, INDEX, ALTER, CREATE TEMPORARY TABLES, CREATE VIEW, EVENT, 
TRIGGER, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EXECUTE ON *.* 
TO 'coletor'@'%' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `coletor`;
GRANT ALL PRIVILEGES ON `coletor`.* TO 'coletor'@'%';
GRANT ALL PRIVILEGES ON `coletor\_%`.* TO 'coletor'@'%';
```
Crie o banco de dados
```php
php artisan migrate
```
Popule o banco de dados (opcional)
```php
php artisan db:seed
```
Rode o servidor localmente na porta 9000 para testes
```php
php artisan serve --host 0.0.0.0 --port 9000
```

Rotas

| Domain | Method   | URI                   | Name | Action                                          | Middleware |
|--------|----------|-----------------------|------|-------------------------------------------------|------------|
|        | POST     | api/auth/login        |      | App\Http\Controllers\AuthController@login       | api        |
|        | POST     | api/auth/logout       |      | App\Http\Controllers\AuthController@logout      | api        |
|        | POST     | api/auth/refresh      |      | App\Http\Controllers\AuthController@refresh     | api        |
|        | POST     | api/auth/register     |      | App\Http\Controllers\AuthController@register    | api        |
|        | GET|HEAD | api/auth/user-profile |      | App\Http\Controllers\AuthController@userProfile | api        |
|        | GET|HEAD | api/cidades           |      | App\Http\Controllers\CidadeController@index     | api        |
|        | GET|HEAD | api/clientes          |      | App\Http\Controllers\ClienteController@index    | api        |
|        | GET|HEAD | api/enderecos         |      | App\Http\Controllers\EnderecoController@index   | api        |
|        | GET|HEAD | api/leituras          |      | App\Http\Controllers\LeituraController@index    | api        |
|        | GET|HEAD | api/medidores         |      | App\Http\Controllers\MedidorController@index    | api        |
|--------|----------|-----------------------|------|-------------------------------------------------|------------|
