<?php

namespace controller;

require_once 'models/User.php';

class UserController
{
    public function index()
    {
        // Lógica para a página de listagem de usuários
        include 'views/user/index.php';
    }

    public function create()
    {
        // Lógica para a criação de um novo usuário
        include 'views/user/create.php';
    }

    public function edit($userId)
    {
        // Lógica para editar um usuário com o ID $userId
        include 'views/user/edit.php';
    }

    public function delete($userId)
    {
        // Lógica para excluir um usuário com o ID $userId
        include 'views/user/delete.php';
    }
}
