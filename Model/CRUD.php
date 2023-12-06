<?php

require_once "../config/connexion.php";
abstract class CRUD
{
    protected  $pdo; // objet de connexion
    protected $table;
    function __construct()
    {
        $obj = new connexion();

        $this->pdo = $obj->getConnexion();
    }

    public function find($id)
    {
        $sql = "select * from {$this->table}  where id =$id";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    public function findAll()
    {
        $sql = "select * from  {$this->table}";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    public function delete($id)
    {
        $sql = "delete from {$this->table}  where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
}
