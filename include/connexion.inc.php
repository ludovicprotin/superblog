<?php


$is_connect = FALSE;
  //verification si cookie existe et non nul
if (isset($_COOKIE['sid']) AND !empty($_COOKIE['sid'])){
    /* @var $bdd PDO */
    $select = "SELECT * FROM utilisateurs WHERE sid = :sid";
    
        //securisation des données 
    $sth = $bdd->prepare($select);
    $sth->bindValue(':sid', $_COOKIE['sid'], PDO::PARAM_STR); 
    
    $sth->execute();
    
    if($sth->rowCount() > 0 ){
        $tab_result_connexion = $sth->fetch(PDO::FETCH_ASSOC);
        
        $is_connect = TRUE; 
        $_SESSION['nom'] = $tab_result_connexion['nom'];
        $_SESSION['prenom'] = $tab_result_connexion['prenom'];
    }
}
//var_dump($is_connect);
