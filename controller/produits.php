<?php
ob_start();
/*require_once "config/connexion.php";
$sql = "select * from produit";
$res = $connexion->query($sql); //$res est un objet PDOStatement
$LesProduits = $res->fetchAll(PDO::FETCH_NUM); // array contient tous les produits
*/
require_once "../Model/CRUD_Produit.php";
$CRUD = new CRUD_Produit();
$LesProduits = $CRUD->findAll_with_cat();
include "../view/all_product.php";
