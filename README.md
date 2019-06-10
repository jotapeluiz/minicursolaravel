# README

Projeto usado no minicurso de Laravel na Puc Minas *campus* Poços de Caldas

## Requerimentos

* PHP >= 7.1.3
* BCMath PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PDO PHP Extension (MySQL)
* Tokenizer PHP Extension
* XML PHP Extension
* Composer
* MySQL >= 5.7

## Setup local

Crie uma base de dados no MySQL com o comando:
```sql
CREATE DATABASE contacts;
```
Acesse a pasta minicursolaravel via terminal e instale as dependências:
```bash
composer install
```
Rode as migrations:
```bash
php artisan migrate
```
Rode as seeds:
```bash
php artisan db:seed
```
Inicie o servidor local:
```bash
php artisan serve
```
Acesse a aplicação no endereço: http://127.0.0.1:8000

## Setup com Docker

Caso use [Docker](https://www.docker.com/) acesse a pasta via terminal e suba a aplicação com o comando:
```bash
docker-compose up
```
Instale as dependências:
```bash
docker-compose run app composer install
```
Rode as migrations:
```bash
docker-compose run app php artisan migrate
```
Rode as seeds:
```bash
docker-compose run app php artisan db:seed
```
Acesse a aplicação no endereço: http://localhost:8080

## Configuração da Base de Dados

No projeto existe um arquivo `.env.example` onde você deve configurar a conexão base de dados.

Renomeie para `.env` e configure da seguinte forma:

Caso tenha o MySQL instalado localmente:

```bash
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=contacts
DB_USERNAME=root
DB_PASSWORD=password
```

Caso esteja executando com Docker:
```
Não precisa alterar nada
```

## Autenticação

Ao rodar as seeds a aplicação gera dois usuários:

* Um aleatório usando Faker:
    * Senha: qwer1234
* Um administrador com os seguintes dados:
    * E-mail: administrador@adm.com
    * Senha: qwer1234



## Considerações Finais

Explore, entenda e altere o projeto como quiser. Consulte a documentação para saber o que o
framework é capaz de fazer.

Sugestões de funcionalidades para adicionar:

* Listagem, edição e exclusão de usuários;
* Listar somente as mensagens do usuário que fez login;
* Listar e recuperar as mensagens e usuários deletados;
* Que sua imaginação inventar =)
