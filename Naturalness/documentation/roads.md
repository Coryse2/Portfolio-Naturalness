# Routes

| URL | Titre | Description de la page | Méthode HTTP | Controller | Méthode | commentaire |
|--|--|--|--|--|--|--|
| `/` | Accueil | liste des recettes | GET | MainController | home |  |
| `/search` | recherche | ustensiles | Post | MainController | in maincontroller cause it's a generic page  |  |
| `/material` | Ustensiles – Liste des ustensiles | ustensiles | GET | MainController | in maincontroller cause it's a generic page  |  |
| `/about` | Page about du site | page de contact, explication | GET | MainController |  | Affiche les informations sur le site |
| `/recipes` | Recettes – Liste des recettes | recettes avec catégorie | GET | RecipeController | recette |  |
| `/recipe/[id]` | Recette – Titre de la recette | recette avec ingrédients | GET | RecipeController | recette |  |
| `/recipe/[id]` | - | traitement du formulaire soumis et affichage des recettes | POST | RecipeController | recipePost |  !! PAS ENCORE FAIT |
| `/categories` | Catgéories – Liste des catégories |  catégorie | GET | CategoryController | category |  |
| `/category` | Catégories de recettes | liste des catégories | GET | CategoryController | categories | Affiche la liste complète des catégories |
| `/category/[id]/recipe` | Catégorie – Nom de la catégorie | Liste des recettes pour la catégorie donnée | GET | CategoryController | category | Affiche la liste des recettes relatives à une catégorie |
| `/signup` | Inscription | formulaire d'inscription | GET | UserController | signup | ok |
| `/signup` | - | Traitement du formulaire d'inscription | POST | UserController | signupPost |  |
| `/signin` | Connexion | formulaire de connexion | GET | UserController | signin | ok |
| `/signin` | - | Traitement du formulaire de connexion | POST | UserController | signinPost |  |
| `/logout` | - | Traitement de la déconnexion | GET | UserController | logout |  |
| `/account` | Mon compte | Page profil de l'utilisateur connecté | GET | UserController | profile | Affiche uniquement les informations dont on dispose sur l'utilisateur connecté |


A VOIR 

| `/ingredients` | ingrédients | liste des ingredients | GET | IngredientController | ingredients | Affiche la liste complète des ingrédients |
| `/ingredient/[id]/recipe` | Ingrédient – Nom de l'ingrédient | Liste des recettes pour l'ingrédient donné | GET | IngredientController | ingredient | Affiche la liste des recettes relatives à un ingrédient |
