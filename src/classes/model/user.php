<?
namespace Model;

class User
{
    public function createUser($name, $email)
    {
        // $pdo = \DB::getConnection(); // Obtém a conexão com o banco de dados a partir do bootstrap.php

        print_r($name);

        // try {
        //     $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
        //     $stmt = $pdo->prepare($sql);
        //     $stmt->bindParam(':name', $name);
        //     $stmt->bindParam(':email', $email);
        //     $stmt->execute();

        //     // Você pode retornar algum indicativo de sucesso aqui, se necessário
        //     return true;
        // } catch (\PDOException $e) {
        //     // Lidere com erros de inserção aqui, se necessário
        //     return false;
        // }
    }
}
