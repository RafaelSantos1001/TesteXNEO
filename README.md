# TesteXNEO
Teste feito para vaga de DesenvolvedorFullstack. 

Documentação - To-Do List

Esta documentação descreve a implementação de um sistema de To-Do List simples, onde os usuários
podem adicionar, editar, excluir e visualizar tarefas.
Tecnologias Utilizadas
• HTML
• CSS (sem framework)
• JavaScript
• jQuery
• AJAX
• PHP
• MySQL
Estrutura do Projeto
O projeto é dividido em vários arquivos que contêm o código para cada componente. Aqui está a
estrutura básica do projeto:
markdownCopy code
- index.html
- css/
- styles.css
- js/
- jquery-3.7.0.min.js
- scripts.js
- php/
- db_config.php
- todo_functions.php
• index.html: O arquivo HTML principal que contém a estrutura da página, formulários e a
lista de tarefas.

• css/styles.css: O arquivo CSS que contém os estilos para a página e a aparência do To-
Do List.

• js/jquery-3.7.0.min.js: A biblioteca jQuery necessária para facilitar a manipulação
do DOM e realizar solicitações AJAX.
• js/scripts.js: O arquivo JavaScript que contém o código para a lógica do To-Do List,
como adicionar, editar, excluir e filtrar tarefas.
• php/db_config.php: O arquivo PHP que contém as informações de configuração do
banco de dados, como o nome do servidor, nome de usuário, senha e nome do banco de
dados.
• php/todo_functions.php: O arquivo PHP que contém as funções para interagir com o
banco de dados, como inserir, atualizar, excluir e recuperar tarefas.

Funcionalidades Principais
Adicionar Tarefa
• O usuário pode adicionar uma nova tarefa preenchendo o campo de entrada e pressionando o
botão "Adicionar" ou pressionando Enter.
• A tarefa é salva no banco de dados por meio de uma solicitação AJAX para o arquivo PHP
todo_functions.php.
• A tarefa é exibida na lista de tarefas na interface do usuário.

Editar Tarefa
• O usuário pode editar uma tarefa clicando no botão de edição ao lado da tarefa.
• O formulário de edição é exibido, preenchido com o texto da tarefa selecionada.
• O usuário pode fazer as alterações desejadas e salvar a edição clicando no botão "Salvar" ou
pressionando Enter.
• A tarefa é atualizada no banco de dados e na interface do usuário por meio de uma solicitação
AJAX para o arquivo PHP todo_functions.php.

Excluir Tarefa
• O usuário pode excluir uma tarefa clicando no botão de exclusão ao lado da tarefa.
• A tarefa é removida do banco de dados e da interface do usuário por meio de uma solicitação
AJAX para o arquivo PHP todo_functions.php.

Filtrar Tarefas
• O usuário pode filtrar as tarefas por meio de uma opção de filtro: "Todos", "Feitos" e "A fazer".
• A lista de tarefas é atualizada com base na opção de filtro selecionada.
Configuração do Banco de Dados
• Crie um banco de dados MySQL.
• Importe o arquivo database.sql para criar a tabela tasks no banco de dados.
• No arquivo db_config.php, atualize as informações de configuração com o nome do
servidor MySQL, nome de usuário, senha e nome do banco de dados corretos.
