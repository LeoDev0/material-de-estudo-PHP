<?php

class Contato {
  private $pdo;

  public function __construct() {
    $dbuser = "root";
    $dbpass = "";
    $dbname = "crud_oo";
    $host = "localhost";
    $dsn = "mysql:dbname=$dbname;host=$host";
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
      $this->pdo = new PDO($dsn, $dbuser, $dbpass, $options);

    } catch (\PDOException $e) {
      die('Erro: ' . $e->getMessage());
    }
  }

  public function adicionar($nome, $email) {
    if ($this->existeEmail($email) ==  false) {  // Se o email não existir...
      $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
      $sql = $this->pdo->prepare($sql);
      $sql->bindValue(":nome", $nome);
      $sql->bindValue(":email", $email);
      $sql->execute();

      return true;
    } else {
      return false;
    }
  }

  public function getDados($id) {
    $sql = "SELECT * FROM contatos WHERE id = :id";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      return $sql->fetch();
      
    } else {
      return array();
    }
  }

  public function getAll() {
    $sql = "SELECT * FROM contatos";
    $sql = $this->pdo->query($sql);
    
    if ($sql->rowCount() > 0) {
      return $sql->fetchAll();
    } else {
      return array();
    }
  }

  public function editar($id, $nome, $email) {
    // if ($this->existeEmail($email)) {
    $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":id", $id);
    $sql->execute();

    //   return true;
    // } else {
    //   return false;
    // }
  }

  // public function excluir($email) {
  //   if ($this->existeEmail($email)) {
  //     $sql = "DELETE FROM contatos WHERE email = :email";
  //     $sql = $this->pdo->prepare($sql);
  //     $sql->bindValue(":email", $email);
  //     $sql->execute();

  //     return true;
  //   } else {
  //     return false;
  //   }
  // }

  public function excluir($id) {
    $sql = "DELETE FROM contatos WHERE id = :id";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();
  }

  private function existeEmail($email) {
    $sql = "SELECT email FROM contatos WHERE email = :email";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
?>