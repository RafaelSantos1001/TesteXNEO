<?php

$servername = "localhost";
$username = "nome_do_usuario";
$password = "senha_do_usuario";
$dbname = "todolist";


$conn = new mysqli($localhost, $nome_do_usuario, $senha_do_usuario, $todolist);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Adicionar uma nova tarefa
if ($_POST['action'] == 'add') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    if ($conn->query($sql) === true) {
        echo "Tarefa adicionada com sucesso!";
    } else {
        echo "Erro ao adicionar a tarefa: " . $conn->error;
    }
}

// Atualizar o status de conclusão de uma tarefa
if ($_POST['action'] == 'updateStatus') {
    $taskId = $_POST['taskId'];
    $done = $_POST['done'];

    $sql = "UPDATE tasks SET done = $done WHERE id = $taskId";
    if ($conn->query($sql) === true) {
        echo "Status de conclusão atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o status de conclusão da tarefa: " . $conn->error;
    }
}

// Atualizar os detalhes de uma tarefa
if ($_POST['action'] == 'updateDetails') {
    $taskId = $_POST['taskId'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "UPDATE tasks SET title = '$title', description = '$description' WHERE id = $taskId";
    if ($conn->query($sql) === true) {
        echo "Detalhes da tarefa atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os detalhes da tarefa: " . $conn->error;
    }
}

// Excluir uma tarefa
if ($_POST['action'] == 'delete') {
    $taskId = $_POST['taskId'];

    $sql = "DELETE FROM tasks WHERE id = $taskId";
    if ($conn->query($sql) === true) {
        echo "Tarefa excluída com sucesso!";
    } else {
        echo "Erro ao excluir a tarefa: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
