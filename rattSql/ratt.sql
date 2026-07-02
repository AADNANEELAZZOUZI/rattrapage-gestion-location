//ex 1
SELECT MAX(produit.prix) AS prix_max FROM produit;

//ex 2

SELECT produit.nom AS produit , categorie.nom AS categorie FROM produit INNER JOIN categorie ON categorie.id = produit.categorie_id;


//ex 3

SELECT categorie.nom AS categorie , COUNT(produit.id) AS nombre_produits FROM
produit INNER JOIN categorie ON categorie.id = produit.categorie_id
ORDER by categorie.nom


//ex 4 
SELECT categorie.nom AS categorie, SUM(commande.quantite) AS quantite_total FROM commande  INNER JOIN produit ON produit.id = commande.produit_id INNER JOIN categorie ON categorie.id = produit.categorie_id