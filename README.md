# API - Auth Controller
Projeto utilizando pacote UI com Bootstrap Laravel para autenticação de uruários, criação de registro de usuario, sessões de login, redefinição de senha e envio de email de validação de senha.

## 🔧 Tecnologias utilizadas

Projeto foi desenvolvido utilizando a linguagem PHP com framework Laravel. O banco de dados foi hospedado através do Docker utilizando PostgreSQL com DBeaver. 

### Vídeo de apresentação: 
[...]

Seguem abaixo as depêndencias externas utilizadas:
| Plugin | Uso |
| ------ | ------ |
| ... | ... |

### Modelagem da base de dados PostgreSQL
[....]

## 🚀 Como executar o projeto

-Clonar o repositório

-Instalar pacote UI do laravel

```sh
 composer require laravel/ui
```
-Rodar comando para criar as tabelas nativas no bd

```sh
 php artisan migrate
```

-Configurar banco de dados e configurar aquivo .env:
```
DIALECT_DATABASE=''
HOST_DATABASE=''
USER_DATABASE=''
PASSWORD_DATABASE=''
PORT_DATABASE=''
PORT_API=''
NAME_DATABASE=''
```

-No prompt de comando executar :
```sh
php artisan serve
```
-Executar em seguida:
```sh
npm run dev
```

