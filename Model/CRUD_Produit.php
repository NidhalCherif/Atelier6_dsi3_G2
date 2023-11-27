<?php
require_once "produit.php";
require_once "../config/connexion.php";
class CRUD_Produit
{
    private $pdo; // objet de connexion
    function __construct()
    {
        $obj = new connexion();

        $this->pdo = $obj->getConnexion();
    }

    public function find($ref)
    {
        $sql = "select * from produit where reference ='$ref'";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    public function findAll()
    {
        $sql = "select * from produit";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    public function delete($ref)
    {
        $sql = "delete from produit where reference='$ref'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    public function update(produit $p)
    {
        $sql = "update produit set 
            libelle='{$p->getLibelle()}',
            prix={$p->getPrix()},
            qte.................
            where reference ='{p->getReference}'";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    public function add(produit $p)
    {
        $sql = "insert into produit values (
        '{$p->getReference()}',.......)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
}
