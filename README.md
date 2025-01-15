<h3 align="center">
  <p> ENCURTADOR DE LINKS </p>
</h3>
<img src="./public/assets/img/img1.jpeg" />
<hr>
<img src="./public/assets/img/img2.jpeg" />

## 📖 Sobre o projeto

-   Este projeto é uma aplicação web desenvolvida para fornecer um serviço de encurtamento de URLs. Ele permite que os usuários convertam links longos em versões curtas, fáceis de compartilhar e lembrar.

## 🔨 Tecnologias utilizadas

-   [PHP](https://www.php.net/)
-   [Laravel](https://laravel.com/)
-   [Composer](https://getcomposer.org/)
-   [MySql](https://dev.mysql.com/doc/)
-   [Docker](https://www.docker.com/)
-   [Nginx](https://nginx.org/en/)
-   [Swagger](https://swagger.io/docs/)
-   [Bootstrap](https://getbootstrap.com/)

## ♻️ Como executar o projeto

### Pré-requisitos:

-   Docker Desktop
-   Git

```bash
  # Clonar repositório
  $ git clone https://github.com/jefersoniw/encurtador-url.git
```

```bash
  # Entrar na pasta do projeto
  $ cd encurtador-url
```

```bash
  # copiar o env example para a nova configuração do env
  $ cp .env.example .env
```

```bash
  # copiar e ajustar as configurações de environment
  DB_CONNECTION=mysql
  DB_HOST=db_enc_url
  DB_PORT=3306
  DB_DATABASE=db_enc_url
  DB_USERNAME=root
  DB_PASSWORD=root

  REDIS_HOST=redis_enc_url
  REDIS_PASSWORD=null
  REDIS_PORT=6379
```

```bash
  # Cria e inicia os containers docker
  $ docker compose up -d
```

```bash
  # No docker, acessa o container do php para instalação das dependencias.
  $ docker compose exec app_enc_url bash
```

```bash
  # Instalando dependências
  $ composer install
```

```bash
  # Gerando uma nova chave no seu arquivo .env
  $ php artisan key:generate
```

```bash
  $ php artisan optimize
```

```bash
  # Publicando todo o schema de dados no banco de dados | Criação das tabelas no banco.
  $ php artisan migrate
```

```bash
  # Instalando as dependências javascript.
  $ npm install
```

```bash
  # Instalando as dependências javascript.
  $ npm run dev
```

-   ### Para acessar a aplicação funcionando acesse ➡️ http://localhost/

## 🛎️ License

[![NPM](https://img.shields.io/badge/license-MIT-green)](https://github.com/jefersoniw/atendimento_nodejs/blob/main/LICENSE)

## 🤓 Autor

### Jeferson Chagas Silva

### https://www.linkedin.com/in/jefersoniw/
