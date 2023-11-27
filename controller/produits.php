<?php
ob_start();
/*require_once "config/connexion.php";
$sql = "select * from produit";
$res = $connexion->query($sql); //$res est un objet PDOStatement
$LesProduits = $res->fetchAll(PDO::FETCH_NUM); // array contient tous les produits
*/
require_once "../Model/CRUD_Produit.php";
$CRUD = new CRUD_Produit();
$LesProduits = $CRUD->findAll();
?>
<h1>Liste des produits</h1>
<table id="example" class="table">
    <thead>
        <tr class="table-primary">
            <th>Référence</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>En Promo</th>
            <th>Action</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($LesProduits as $produit) {
            echo "<tr> 
            <td>$produit[0]</td>
            <td>$produit[1]</td>
            <td>$produit[2]</td>
            <td>$produit[3]</td>
            <td>$produit[5]</td>
            <td><a href='delete.php?ref=$produit[0]'>Supprimer</a></td>
            <td><a href='#'>Edit</a></td>
            <td><a href='#'>Voir détail...</a></td>
            </tr>";
        }
        echo " </tbody></table>";




        $contenu = ob_get_clean();
        include "../view/layout.php";
