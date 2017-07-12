faire des mosaiques cliquables pour afficher la recette. Ajouter un champ dans l'entité correspondant à la saison ou un champ tags afin de créer un onglet "recettes du moment"

table ingrédients: id, nom ingrédients, type (viande, légume, fruit, sucré, salé)

table WildChef: id, nom, id recettes, description?

table mots clés: id, mot

table type: sucré, salé, épicé

table recette du moment? Ou requête sql

table recettes:id recette, nom, description, id chef, instruction, temps préparation, temps cuisson, difficulté, mots clés, id ingrédients, quantité, nombre de personne, note

créer service qui ajoute directement en bdd les ingrédients et les différents mots clés.

créer compte marmiton pour voir comment cela se présente
