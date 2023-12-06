<?php

require_once "../Model/CRUD_Produit.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $CRUD = new CRUD_Produit();
    $res = $CRUD->delete($id);
    include "../controller/produits.php";
}
