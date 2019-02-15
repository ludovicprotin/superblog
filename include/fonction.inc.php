<?php 
require_once('config/init.conf.php');
//Crypte le mot de passe dans la bdd
function cryptPassword($mdp){
    $mdp_crypt = sha1($mdp);
    return $mdp_crypt;
}

//création un sid avec le mail et le temp
function sid($email){
    $sid = md5($email.time()); 
    return $sid;
}

//retourne l'index de départ pour la requête sql
function indexPagination($page_courante, $nb_article_par_page) {
    $index = ($page_courante - 1) * $nb_article_par_page;
    return $index;
}

//retourne le nombre d'article publié
function nb_total_article_publie($bdd){
    $sql = "SELECT COUNT(*) as nb_total_article_publie "
    . "FROM article "
    . "WHERE publie = 1 ";
    
    $sth = $bdd->prepare($sql);
    $sth->execute();
    $tab_result = $sth->fetch(PDO::FETCH_ASSOC);
    
    return $tab_result['nb_total_article_publie']; 
}

//Récupération id utilisateur (auteur de l'article)
function getIdUtilisateur($bdd) {
    $sql = "SELECT id "
    . "FROM utilisateurs "
    . "WHERE nom = ? "
    . "AND prenom = ?";
    
    $sth = $bdd->prepare($sql);
    $sth->execute(array($_SESSION['nom'], $_SESSION['prenom']));
    $tab_result = $sth->fetch(PDO::FETCH_ASSOC);
    
    return $tab_result['id']; 
}

//Récupération du nom et prénom de l'auteur
function getAuteur($bdd, $idUtilisateur) {
    $sql = "SELECT nom, prenom "
    . "FROM utilisateurs "
    . "WHERE id = ?";
    $sth = $bdd->prepare($sql);
    $sth->execute(array($idUtilisateur));
    $tab_result = $sth->fetch(PDO::FETCH_ASSOC);

    return $tab_result['nom']." ".$tab_result['prenom'];
}

//Retourne le nom de l'utilisateur
function getNomUtilisateur($bdd, $sid) {
    $sql = "SELECT nom, prenom "
    . "FROM utilisateurs "
    . "WHERE sid = ?";
    $sth = $bdd->prepare($sql);
    $sth->execute(array($sid));
    $tab_result = $sth->fetch(PDO::FETCH_ASSOC);

    return $tab_result['nom']." ".$tab_result['prenom'];   
}

//récupère les informations des articles
function getInfoArticle($bdd, $idArticle) {
    $sql = "SELECT * "
    . "FROM article "
    . "WHERE id = ?";
    $sth = $bdd->prepare($sql);
    $sth->execute(array($idArticle));
    $tab_result = $sth->fetch(PDO::FETCH_ASSOC);

    return $tab_result;
}

//requête barre de recherche
function searchArticle($bdd, $req) {
    $sql = "SELECT id, titre, texte, publie, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, idUtilisateur "
    ."FROM article "
    ."WHERE titre LIKE '%".$req."%' OR texte LIKE '%".$req."%'";
    
    $tab_result= $bdd->query($sql);
    $tab_result = $tab_result->fetchAll(PDO::FETCH_ASSOC);
    return $tab_result;

}

//retourne les commentaires d'un article
function getComents($bdd, $idArticle) {
    $sql = "SELECT C.id, C.email, C.pseudo, C.texte, C.date, C.idArticle "
    . "FROM commentaires as C "
    . "INNER JOIN article as A "
    . "ON C.idArticle = A.id "
    . "WHERE C.idArticle = ".$idArticle." "
    . "GROUP BY C.id "
    . "ORDER BY C.date";

    $sth = $bdd->query($sql);
    $sth->execute();
    $tab_result = $sth->fetchAll(PDO::FETCH_ASSOC);

    return $tab_result;

}

//supprime un commentaire
function deleteComent($bdd, $idComent) {
    $sql = "DELETE FROM commentaires "
    . "WHERE id = ".$idComent;
    $sth = $bdd->query($sql);
    $sth->execute();
}

//supprime un article
function deleteArticle($bdd, $idArticle) {
    $sql = "DELETE FROM article "
    . "WHERE id = ".$idArticle;
    $sth = $bdd->query($sql);
    $sth->execute();
    
    $sql = "DELETE FROM commentaires "
    . "WHERE idArticle = ".$idArticle;
    $sth = $bdd->query($sql);
    $sth->execute();   
}

//recupère tous les articles dans la base de données
function getArticles($bdd, $index_depart_MYSQL) {
    $sql_select = "SELECT id, titre, texte, publie, DATE_FORMAT(date, '%d/%m/%Y') as date_fr, idUtilisateur "
    ."FROM article WHERE publie = :publie " 
    ."ORDER BY date DESC "
    ."LIMIT :index_depart, :nb_limit ";
              //securisation des variable 
    $sth = $bdd->prepare($sql_select);
    $sth->bindValue(':publie', 1, PDO::PARAM_BOOL);
    $sth->bindValue(':index_depart', $index_depart_MYSQL, PDO::PARAM_INT);
    $sth->bindValue(':nb_limit', _nb_art_par_page, PDO::PARAM_INT);


    $sth->execute();
    $tab_articles = $sth->fetchAll(PDO::FETCH_ASSOC);
    return $tab_articles;
}