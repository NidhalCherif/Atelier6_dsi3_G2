<?php
require_once "produit.php";
require_once "CRUD.php";

class CRUD_Produit extends CRUD
{
    protected $table = 'produit';


    public function findAll_with_cat()
    {
        $sql = "select p.id,p.libelle,p.prix,p.qte,p.promo,c.libelle
                from produit as p,categorie as c
                  where p.id_categorie=c.id ";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    public function update(produit $p)
    {
        $sql = "update produit set 
            libelle='{$p->getLibelle()}',
            prix={$p->getPrix()},
            qte.................
            where id ={p->getId}";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    public function add(produit $p)
    {
        $sql = "insert into produit values (
        null,'{p->getLibelle()}',.......)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
}
