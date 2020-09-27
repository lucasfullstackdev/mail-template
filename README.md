<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre a aplicação

Este é apenas um exemplo simplificado de como é possível desenvolver uma arquitetura simples, mas muito útil, para o envio de e-mails baseados em template blade, aproveitando assim toda a componentização da engine blade, evitando redundâncias e arquivos muito extensos.

## O que foi utilizado

- **[PHP ^7.3](https://www.php.net/)**
- **[Composer](https://getcomposer.org/)**
- **[Laravel 8x](https://laravel.com/docs/8.x)**
- **[Artisan CLI](https://laravel.com/docs/8.x/artisan)**
- **[Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/)**
- **[Font awesome](https://fontawesome.com/)**

## Arquitetura para construção de e-mail

- Views/
    - mail/
        - base-model/
            - company.blade.php
        - model/
            - new-user.blade.php
        - abstract-mail.blade.php

## Abstract-mail.blade.php
Arquivo no topo da hierarquiva de templates blade. Aqui estão as definições mais básicas e comuns para todos os modelos de e-mail, tais quais:
- Estrutura Html
- Importação dos arquivos CSS necessários, como  por exemplo, bootstrap e font awesome

## Company.blade.php
Este arquivo exemplifica os modelos de e-mail que podem variar conforme a necessidade do e-mail, por exemplo, a estrutura de um e-mail corporativo pode ser (e geralmente é) diferente de um e-mail que tem como objetivo enviar uma notificação ou um relatório.

## new-user.blade.php
Este arquivo exemplifica o conteúdo (o corpo) do modelo company.

# Conclusão
Esta arquitetura nos permite:
- Criar N modelos novos, acompanhando assim as necessidades da empresa
- Para cada modelo, podemos criar N corpo de texto

Tudo isso nos permite por exemplo, criar com grande facilidades os seguintes e-mail:

- Company
	- Boas-vindas ao usuário
	- Alteração de senha
	- Notificação de Login
	- Notificação de aniversário
- Newsletter
	- Promoções
	- Novidades
- Report
	- Balanço comercial
	- Relatório de logs

Como você pode ver, seguindo esta proposta é possível ter uma gestão mais eficaz dos seus e-mails, podendo assim fazer alterações com maior facilidade.

## Setup
1. Instale o [composer](https://getcomposer.org/download/)
2. Clone este repositório
3. Acesse a raiz do projeto e rode os comandos:
```
	composer install
	npm install
	npm run dev
	cp .env.example .env
	php artisan key:generate
```
4. Após a instalação de todas as dependências necessárias, execute o comando `php artisan serve`
5. O projeto deve estar disponível no endereco: [localhost:8000](http://localhost:8000/) 

## Considerações finais
Qualquer dúvida ou sugestão, entre em contato pelo e-mail: lucas.fullstack.dev@gmail.com
