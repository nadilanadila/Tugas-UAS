<?php

  // database
  class dataBase {

    protected $host     = 'localhost';
    protected $database = 'tryingCMS';
    protected $user     = 'root';
    protected $password = '';

    function __construct() {
      try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }

    public function closeConnection() {
      $this->conn = null;
    }
  }

  // abstract
  abstract class data extends dataBase{

    abstract protected function getAllData();
    abstract protected function getData($id);

  }

  // article
  class article extends data{

    public function getAllData() {
      try {
        $query  = 'SELECT * FROM articles';
        $result = $this->conn->prepare($query);
        $result->execute();
      } catch (\Exception $e) {
        echo $e->getMessage();
      } finally {
        return $result->fetchAll();
      }
    }

    public function getRowCountData() {
      try {
        $query  = 'SELECT * FROM articles';
        $result = $this->conn->prepare($query);
        $result->execute();
      } catch (\Exception $e) {
        echo $e->getMessage();
      } finally {
        return $result->RowCount();
      }
    }

    public function getData($id) {
      try {
        $query   = 'SELECT * FROM articles WHERE id = :id';
        $result  = $this->conn->prepare($query);
        $params  = array(
          ':id' => $id,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      } finally {
        return $result->fetch();
      }
    }


    public function insertData($title, $content) {
      try {
        $query  = 'INSERT INTO articles VALUES(NULL, :title, :content, NULL)';
        $result = $this->conn->prepare($query);
        $params = array (
          ':title'   => $title,
          ':content' => $content,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }

    public function updateData($id, $title, $content) {
      try {
        $query  = 'UPDATE articles SET title = :title, content = :content WHERE id = :id';
        $result = $this->conn->prepare($query);
        $params = array(
          ':id'      => $id,
          ':title'   => $title,
          ':content' => $content,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }

    public function deleteData($id) {
      try {
        $query  = 'DELETE FROM articles WHERE id = :id';
        $result = $this->conn->prepare($query);
        $params = array(
          ':id' => $id,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }

    public function getArticlePages($start, $perPage) {
      try {
        $query  = 'SELECT * FROM articles LIMIT :start, :perPage';
        $result = $this->conn->prepare($query);
        $result->bindValue(':start', (int) $start, PDO::PARAM_INT);
        $result->bindValue(':perPage', (int) $perPage, PDO::PARAM_INT);
        $result->execute();
      } catch (\Exception $e) {
        echo $e->getMessage();
      } finally {
        return $result->fetchAll();
      }
    }
  }

  // user
  class user extends data {

    public function getData($usernameOrId) {
      try {
        $query  = 'SELECT * FROM user WHERE username = :username OR id = :id';
        $result = $this->conn->prepare($query);
        $params = array (
          ':id'       => $usernameOrId,
          ':username' => $usernameOrId,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      } finally {
        return $result->fetch();
      }
    }

    public function getRowCountData($usernameOrId) {
      try {
        $query  = 'SELECT * FROM user WHERE username = :username OR id = :id';
        $result = $this->conn->prepare($query);
        $params      = array (
          ':id'       => $usernameOrId,
          ':username' => $usernameOrId,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      } finally {
        return $result->RowCount();
      }
    }

    public function getAllData() {
      try {
        $query  = 'SELECT * FROM user';
        $result = $this->conn->prepare($query);
        $result->execute();
      } catch (\Exception $e) {
        echo $e->getMessage();
      } finally {
        return $result->fetchAll();
      }
    }

    public function updateUser($id, $username, $password) {
      try {
        $query  = 'UPDATE user SET username = :username, password = :password WHERE id = :id';
        $result = $this->conn->prepare($query);
        $params = array(
          ':id'       => $id,
          ':username' => $username,
          ':password' => $password,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }


    public function deleteUser($id) {
      try {
        $query  = 'DELETE FROM user WHERE id = :id';
        $result = $conn->prepare($query);
        $params = array(
          ':id' => $id,
        );
        $result->execute($params);
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }
  }
?>
