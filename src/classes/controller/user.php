<?php

namespace Controller;

use Model\User as UserModel;

class User
{
    public function index()
    {
        include __DIR__ . '../../../views/user/index.php';
    }

    public function create()
    {
        include 'views/user/create.php';
    }

    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $userModel = new UserModel();

        $success = $userModel->createUser($name, $email);
    }

    public function edit($userId)
    {
        include 'views/user/edit.php';
    }

    public function delete($userId)
    {
        include 'views/user/delete.php';
    }
}
