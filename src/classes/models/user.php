<?php
include 'template.php';
?>

<h1>CRUD de Usuários</h1>

<!-- Formulário de criação de usuário -->
<form method="post">
    <h2>Criar Usuário</h2>
    <label for="name">Nome:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <button type="submit" name="create">Criar</button>
</form>

<!-- Lista de usuários -->
<h2>Lista de Usuários</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user->getId(); ?></td>
            <td><?php echo $user->getName(); ?></td>
            <td><?php echo $user->getEmail(); ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $user->getId(); ?>">
                    <input type="text" name="name" value="<?php echo $user->getName(); ?>">
                    <input type="email" name="email" value="<?php echo $user->getEmail(); ?>">
                    <button type="submit" name="update">Editar</button>
                    <button type="submit" name="delete">Excluir</button>
                </form>
            </td>
        </tr>
    <?php } ?>