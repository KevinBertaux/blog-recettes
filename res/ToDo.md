# ECF WordPress

## Objectif

**L'objectif de cette évaluation est de construire un thème WordPress à partir de l'intégration (fournie) du site "Mes recettes".**

**L'extension ACF Pro est mise à votre disposition, mais vous pouvez utiliser l'extension Carbon Fields qui offre les mêmes possibilités.
La différence est qu'elle est gratuite et qu'elle ne se manipule pas via une interface, mais en codant les groupes de champs et champs associés.**

## Le thème

    Le thème est constitué de onze modèles.
    Tous ces modèles sont constitués de deux zones communes.

## L'en-tête

    ✅ Il est constitué du nom du site, de la navigation principale, du moteur de recherche.

### Aller plus loin

    ✅ L'auteur peut définir un logo. Si c'est le cas, il s'affiche à la place du nom du site.
    ✅ La taille max du logo sera de 120x50.
    ✅ Le menu ne peut pas avoir de sous-menu.

## Le pied de page

    ✅ Il est constitué d'un copyright, d'une navigation et d'une liste de réseaux sociaux.
    ✅ Le copyright est constitué du nom du site et de l'année en cours (dynamique).
    ✅ Les réseaux sociaux s'ouvrent dans un nouvel onglet.

## Page index.html : la page d'accueil

Ce modèle est constitué de :

    Une section d'introduction entièrement administrable dont le lien ne peut renvoyer que sur des contenus internes du site.
    Une section affichant les trois derniers articles du blog.
    Une section affichant six recettes populaires.
    Ces recettes sont sélectionnées par l'auteur du site.
    Une section permettant de s'abonner à la newsletter.
    Le lien renvoie vers un service externe permettant de s'abonner type mailchimp (il s'agit juste d'entrer le lien vers ce service).
    Cette section est entièrement administrable.
    Une section de présentation de l'auteur du site.
    Cette section est entièrement administrable.

### Aller plus loin

    On peut choisir le nombre d'articles à afficher dans la section derniers articles (minimum 3).
    S'il y a plus de 3 articles, un carrousel permet de naviguer.
    L'utilisateur peut proposer entre zéro et six recettes populaires.
    S'il propose moins de 6 recettes, le site affiche quand même 6 recettes et sélectionne les recettes manquantes aléatoirement.
    Il ne propose pas les recettes déjà choisies par l'auteur.
    Le système d'abonnement à la newsletter est fonctionnel (solution libre).

## Page blog.html : la page du blog

    ✅ Ce modèle est constitué d'un titre (administrable).
    ✅ Il affiche les neuf derniers articles.

Un article est représenté par une card qui est constituée de :

    ✅ Une image.
    ✅ Les catégories de l'article (cliquables et qui renvoient vers l'archive de la catégorie).
    ✅ Le titre de l'article.
    ✅ L'extrait de l'article.
    ✅ Le lien vers l'article.
    ✅ Les articles suivants sont accessibles grâce à une pagination.

_NB : les "cards" sont les mêmes sur tous les modèles_

### Aller plus loin

    ✅ L'extrait est constitué de 20 mots et fini par la chaine "[...]".
    ✅ On peut choisir de rédiger une description courte qui sera affichée à la place de l'extrait (uniquement si elle est remplie).
    Sa longueur est limitée à 120 caractères.
    On peut filtrer les articles par catégories et changer l'ordre de tri (par date ou titre, ascendant ou descendant).
    Ces filtres et tri se font sans rechargement de page.

## Page category.html : la liste des articles d'une catégorie

    Ce modèle fonctionne comme blog.html mais n'affiche que les articles liés à la catégorie en question.
    ✅ Le titre est le nom de la catégorie.

## Page article.html : un article

Un article est constitué de :

    ✅ Une image principale qui est un champ obligatoire.
    ✅ Un titre.
    ✅ Une date de publication.
    ✅ Une catégorie.
    ✅ Un contenu.
    ✅ Le contenu est éditable via Gutenberg.

### Aller plus loin

    Créer un bloc Gutenberg avec ACF qui permet de choisir une recette publiée sur le site.
    Il permet de choir une recette et affiche la photo, le nom et un lien "Voir la recette" de la recette en question.
    Les seuls blocs utilisables dans la rédaction d'un article :
    Le bloc recette qu'on vient de créer.
    Les blocs "paragraphe", "titre", "liste", et "image".

## Page recipe-list.html : la liste des recettes

Ce modèle fonctionne comme blog.html

    ✅ Le titre est administrable, mais s'il n'est pas rempli, c'est le nom au pluriel du CPT qui s'affiche.
    ✅ Il affiche les douze dernières recettes et une pagination permet de voir les recettes suivantes.

Une card de recette est constituée de :

    ✅ La photo.
    ✅ Les catégories de la recette.
    ✅ Le nom.
    ✅ Le temps de préparation/cuisson.
    ✅ Le nombre de portions.
    ✅ Un lien vers la recette.

_NB : les cards recettes sont les mêmes sur tous les modèles_

### Aller plus loin

    ✅ On peut choisir le nombre de recettes affichées dans l'administration.
    On peut filtrer les recettes :
    Par catégories.
    Par temps de préparation/cuisson.
    Par nombre de portions.
    Changer l'ordre de tri (par date ou titre, ascendant ou descendant).
    Ces filtres et tri se font sans rechargement de page.

## Page recipe-list-category.html : la liste des recettes d'une catégorie

Ce modèle fonctionne comme recipe-list.html.

    Le titre est celui de la catégorie.

### Aller plus loin

    Le système de filtre/tri défini sur recipe-list.html est utilisable ici aussi mais ne permet pas de filter sur la catégorie (logique).

## Page recipe.html : une recette

Une recette est constituée de :

    ✅ Une à deux images.
    ✅ Un titre.
    ✅ Un nombre de portions.
    ✅ Un temps de préparation.
    ✅ Des catégories pour la classer.
    ✅ Une liste d'ingrédients (minimum un ingrédient).
    ✅ Une liste d'étapes de préparation (minimum une étape).
    ✅ Trois recettes liées.
    ✅ Les recettes liées sont choisies par l'utilisateur.

### Aller plus loin

    ✅ L'auteur peut choisir de zéro à trois recettes liées.
    Quelque soit le nombre choisi, le site affiche 3 recettes.
    Les recettes sélectionnées par le site sont des recettes ayant au moins une catégorie en commun, mais ne peuvent pas être la recette affichée, ni une recette choisie par l'auteur.
    Ces recettes sont affichées aléatoirement parmi les recettes répondant aux critères.

## Page "page.html" : une page de contenu

    ✅ Une page est constituée d'un titre et d'un contenu.
    ✅ Ce contenu est éditable via Gutenberg.

## Page contact.html : la page contact

Ce modèle est constitué de :

    ✅ Un titre.
    ✅ Un contenu (dans lequel on peut mettre en gras, en italique, créer des listes, ...).
    ✅ Un formulaire de contact.
    ✅ Une carte de localisation.

Le formulaire 

    Le formulaire est fonctionnel.
    L'auteur du site reçoit le contenu du formulaire.
    La personne qui a rempli le formulaire reçoit un mail lui indiquant que son message est bien reçu et qu'il sera traité rapidement.
    ✅ La carte affiche plusieurs marqueurs correspondant à des ateliers cuisine.
    ✅ Au clic sur le marqueur, on affiche le nom et l'adresse de l'atelier.
    ✅ Vous êtes libre de choisir le fournisseur de carte.
    ✅ Ne cherchez pas à reproduire la carte utilisée pour l'intégration.

### Aller plus loin

Au clic sur les marqueurs, un tooltip affiche les informations l'atelier cuisine :

    ✅ Nom.
    ✅ Adresse.
    Numéro de téléphone (facultatif) cliquable.
    Email (facultatif) cliquable.
    Url (facultatif) cliquable et s'ouvrant dans un nouvel onglet.

## Page "search.html" : les résultats de recherche

    ✅ Ce modèle est constitué d'un titre affichant les termes recherchés, le nombre de résultats de la recherche.
    Les résultats de la recherche (12 contenus par page de résultats, les autres étant accessibles grâce à une pagination).
    ✅ Chaque résultat est constitué du titre, de l'extrait et d'un lien.
    ✅ Si aucun résultat n'est disponible, cela est précisé.

### Aller plus loin

    Sur cette même page, on a un formulaire de recherche avancée qui permet de faire une rechercher des recettes.
    Ce formulaire permet de chercher dans le titre et dans les ingrédients des recettes.

## Page 404.html : la page 404

    ✅ Cette page est constituée d'un titre et d'un contenu.
    ✅ Ils sont administrables.

### Contenus

    Les contenus (textes, médias) sont libres, mais il ne doit pas y avoir de "Lorem ipsum" ou autre faux texte.

## Le site doit contenir au minimum :

Des pages :

    Accueil.
    ✅ À propos.
    ✅ Contact.
    ✅ Mentions légales.
    ✅ Politique de confidentialité.

Des articles :

    ✅ Minimum vingt classés dans au minimum quatre catégories.

Des recettes :

    ✅ Minimum vingt classées dans au minimum six catégories.
    ✅ Pour les articles et recettes, saisissez au moins quatre contenus originaux de chaque que vous pouvez ensuite dupliquer.

Il ne vous est pas demandé d'être créatif, donc n'hésitez pas à aller copier/coller des contenus.
Si vous vous sentez l'âme créative, faites-vous plaisir.

## Le rendu

    Le site doit être mis en ligne (sur l'hébergement de votre choix, celui fourni par le CEFIM faisant tout à fait l'affaire).
    Votre site doit être nettoyé des contenus, extensions, thèmes indésirables / inutiles.
    La configuration du site est faite dans les règles de l'art.
    Le SSL est activé.
    La sécurité est optimisée.
    Les sauvegardes ne sont pas demandées (mais vous devriez les mettre en place quand même).
    Les images sont automatiquement optimisées après l'upload.
    Les médias sont automatiquement renommés si nécessaire après l'upload.
    Les performances sont optimisées.
    La base de données est optimisée et nettoyée régulièrement.
    L'indexation du site est désactivée (important).
    Il n'est pas demandé de mettre en place d'outils de suivi statistiques, de gestion du SEO, ou de gestion RGPD.
    Créez un compte administrateur au nom de Benoist Lawniczak (blawniczak@cefim.eu).

### Vous devez rendre :

    Url du site
    Url de l'administration du site
    Identifiant et mot de passe de l'administrateur Benoist Lawniczak
    Url de votre repository GitLab CEFIM