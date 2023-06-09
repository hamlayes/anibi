<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
$expo = getExposition();

// recuperation des donnees GET, POST, et SESSION
include_once "$racine/modele/bd.exposition.inc.php";

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
$listeExpo = getExposition();


// traitement si necessaire des donnees recuperees


if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    $titre = "NouvelleEntree";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueNouvelleEntree.php";
    include "$racine/vue/pied.html.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue
    $titre = "authentification";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueNouvelleEntree.php";
    include "$racine/vue/pied.html.php";
}

?>