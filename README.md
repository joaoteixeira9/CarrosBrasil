# Carros Brasil

![GitHub repo size](https://img.shields.io/github/repo-size/joaoteixeira9/CarrosBrasil?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/joaoteixeira9/CarrosBrasil?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/joaoteixeira9/CarrosBrasil?style=for-the-badge)
![Bitbucket open issues](https://img.shields.io/bitbucket/issues/joaoteixeira9/CarrosBrasil?style=for-the-badge)
![Bitbucket open pull requests](https://img.shields.io/bitbucket/pr-raw/joaoteixeira9/CarrosBrasil?style=for-the-badge)

<img src="public/img/logo3.png" alt="Logo carros brasil">

> Carros Brasil é um site de compra e venda de veículos, com cadastro de lojas e pessoas físicas, anúncios detalhados com fotos e descrição, além de filtros de busca avançada.

### Ajustes e melhorias

O projeto ainda está em desenvolvimento e as próximas atualizações serão voltadas para as seguintes tarefas:
- [ ] Cadastro de lojas e usuários.
- [ ] Criar, modificar e excluir anúncios.
- [ ] Adicionar fúncionários nas lojas existentes.
- [ ] Buscar por categorias, modelos, preços e etc.
- [ ] Criação de leilões e lances.

## 💻 Pré-requisitos

Antes de começar, verifique se você tem instalado na sua máquina:

```bash
# PHP 8.2+ (necessário para Laravel 12)
php -v

# Composer (gerenciador de dependências do PHP)
composer -V

# MySQL (ou XAMPP, que já inclui Apache + MySQL + PHP)
mysql --version

# Git (opcional, mas recomendado)
git --version
```

## 🚀 Instalando Carros Brasil

#### Clone o repositório
```bash
git clone https://github.com/seu-usuario/carros-brasil.git
```
#### Entre na pasta do projeto
```bash
cd carros-brasil
```

#### Instale as dependências do PHP
```bash
composer install
```
#### Copie o arquivo de ambiente
Linux/Mac:
```bash
cp .env.example .env
```
Windows PowerShell:
```bash
copy .env.example .env 
```
#### Gere a chave da aplicação
```bash
php artisan key:generate
```
## 🗄️ Configurando o Banco de Dados

#### Edite o arquivo .env e configure:
~~~sql
DB_CONNECTION=sql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=carros_brasil
DB_USERNAME=root
DB_PASSWORD=
~~~
#### Crie o banco de dados no MySQL (pode usar phpMyAdmin) e rode as migrations
~~~php
php artisan migrate
~~~

#### (Opcional) Popule o banco com dados de teste
~~~php
php artisan db:seed
~~~

## ☕ Usando Carros Brasil

Para usar ` carros_br `, siga estas etapas:

```bash
# Inicie o servidor local
php artisan serve

# O projeto estará disponível em:
# http://localhost:8000
```
## ✅ Comandos úteis

```bash
# Limpar cache da aplicação
php artisan cache:clear

# Rodar migrations e seeders juntas
php artisan migrate:fresh --seed

# Criar um novo model + migration + controller
php artisan make:model Nome -mc
```
## 🤝 Colaboradores

Agradecemos às seguintes pessoas que contribuíram para este projeto:

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/joaoteixeira9?tab=repositories" title="joaoteixeira9">
        <img src="https://avatars.githubusercontent.com/u/143551272?v=4" width="100px;" alt="Foto do Iuri Silva no GitHub"/><br>
        <sub>
          <b>João Teixeira</b>
        </sub>
      </a>
    </td>
  </tr>
</table>