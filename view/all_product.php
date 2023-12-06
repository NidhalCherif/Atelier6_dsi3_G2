<?php ob_start(); ?>
<h1>Liste des produits</h1>
<table id="example" class="table">
    <thead>
        <tr class="table-primary">
            <th>Référence</th>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>En Promo</th>
            <th>Catégorie
            </th>
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
            <td>$produit[4]</td>
            <td>$produit[5]</td>
            <td><a href='../controller/delete.php?id=$produit[0]'>Supprimer</a></td>
            <td><a href='#'>Edit</a></td>
            <td><a href='#'>Voir détail...</a></td>
            </tr>";
        }
        echo " </tbody></table>";

        $contenu = ob_get_clean();
        include "../view/layout.php";
