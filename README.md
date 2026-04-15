# 🏫 ETEC Zona Leste - Projeto Laravel CRUD

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![SQLite](https://img.shields.io/badge/sqlite-%2307405e.svg?style=for-the-badge&logo=sqlite&logoColor=white)
![Status](https://img.shields.io/badge/status-completo-success?style=for-the-badge)

Este projeto é uma aplicação web completa inspirada no site institucional da **ETEC Zona Leste**. Desenvolvido com o framework **Laravel 8**, o sistema implementa operações de CRUD para a gestão de cursos e mensagens, servindo como um modelo prático de desenvolvimento para sistemas escolares.

---

## 📂 Estrutura do Projeto

A arquitetura do projeto segue o padrão **MVC** (Model-View-Controller):

```text
etec-zona-leste/
├── app/
│   ├── Http/Controllers/   # Lógica: Controladores para Cursos, Contatos e Admin
│   └── Models/             # Dados: Modelos para Cursos e Mensagens de Contato
├── database/
│   ├── migrations/         # Estrutura: Scripts de criação das tabelas
│   └── database.sqlite     # Banco de Dados: Arquivo local de armazenamento
├── resources/
│   ├── views/              # Interface: Blade Templates (Páginas do site e painel)
│   └── css/                # Estilo: CSS personalizado baseado na identidade ETEC
├── routes/
│   └── web.php             # Rotas: Definição de todos os endereços e permissões
└── .env                    # Configurações: Variáveis de ambiente e banco de dados

## 🚀 Funcionalidades

### 🌐 Área Pública (Portal Institucional)
* *Página Inicial:* Banner principal e vitrine de cursos técnicos oferecidos.
* *Sobre a Escola:* Seção detalhada sobre a história, infraestrutura e missão da unidade.
* *Cursos:* Página com detalhes específicos sobre cada curso cadastrado.
* *Contato:* Formulário funcional para envio de dúvidas com armazenamento automático no banco de dados.

### 🔐 Área Administrativa (Painel de Gestão)
* *Autenticação:* Sistema de login seguro com proteção de rotas para administradores.
* *Dashboard:* Painel de controle com resumo estatístico de cursos e mensagens recebidas.
* *CRUD de Cursos:* Gerenciamento total de cursos (Listar, Adicionar, Editar e Excluir).
* *Gestão de Contatos:* Interface para visualização e controle das mensagens enviadas pelos usuários.

---

## 🛠️ Tecnologias e Requisitos

* *Linguagem:* [PHP 8.1+](https://www.php.net/)
* *Framework:* [Laravel 8.x](https://laravel.com/docs/8.x)
* *Banco de Dados:* SQLite (nativo, sem necessidade de servidor externo)
* *Gerenciador de Dependências:* [Composer](https://getcomposer.org/)
* *Versionamento:* [Git](https://git-scm.com/)

---

## 📦 Guia de Instalação e Execução

Siga rigorosamente os passos abaixo para configurar o projeto em sua máquina:
### 1. Clonar o Repositório
```bash
git clone [https://github.com/seu-usuario/seu-repositorio.git](https://github.com/seu-usuario/seu-repositorio.git)
cd seu-repositorio

2. Instalação e Configuração
Copie e cole o bloco de comandos de acordo com o seu sistema operacional para preparar o ambiente:
Linux / macOS 🐧 🍎

composer install && \
cp .env.example .env && \
touch database/database.sqlite && \
php artisan key:generate && \
php artisan migrate --seed && \
php artisan serve

Windows (PowerShell) 🪟
composer install; `
copy .env.example .env; `
ni database/database.sqlite; `
php artisan key:generate; `
php artisan migrate --seed; `
php artisan serve

Windows (Prompt de Comando - CMD) 🪟
composer install && ^
copy .env.example .env && ^
type nul > database/database.sqlite && ^
php artisan key:generate && ^
php artisan migrate --seed && ^
php artisan serve

3. Iniciar o Servidor
Agora é só ligar o servidor local e acessar no navegador:
Acesse: http://localhost:8000

