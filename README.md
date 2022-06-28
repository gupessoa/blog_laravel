## blog_laravel
Projeto final da disciplina de linguagem dinamica para web.
Este tarbalho ten por objetivo o desenvolvimento de uma aplicação web, um blog.

### ✔️ Técnicas e tecnologias utilizadas
- ``PHPStorm``
- ``PHP 8``
- ``Laravel 8``
- ``MySQL``
- ``Bootstrap``
- ``HTML``
- ``CSS``
- ``JavaScript``
- ``Paradigma de orientação a objetos``

### Instruções de deployment:
1 - Inicie o Apache e o MySQL no XAMPP
2 - Clone o repositório com o comando git clone e suando a URL: https://github.com/gupessoa/blog_laravel.git
3 - Abra a pasta clonada no VSCode/ PHP STrom ou sua IDe de preferência e no terminal dele rode o comando composer install para instalar as dependências do projeto, caso dê erro rode o composer install --ignore-platform-req=ext-fileinfo
4 - Renomeie o arquivo .env.example para .env
5 - No navegador digite localhost/phpmyadmin e crie um banco de dados chamado laravel
6 - No terminal da IDE rode o comando php artisan key:generate e depois php artisan migrate para que as tabelas sejam criadas no banco de dados local
7- Ainda no terminal rode o comando php artisan db:seed para que seja populado o banco e deste forma seja criado uma massa de dados de exemplo.
8 - Ainda no terminal, rode o comando php artisan serve para subir a aplicação e clique no link que mostrará na tela

Para ter acesso ao Painel administrativo do site é possível logar com um usuário padrão que é criado apóes executar os passos acima:
Email: admin@admin.com
Senha: password

OBS.:O memso usuário pode ser uzado para adicionar comentarios aos posts
