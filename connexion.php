<?php
// active la session
session_start();

// Chargement des fichiers de configuration
require_once('config/init.conf.php');
require_once('config/bdd.conf.php');
require_once ('include/fonction.inc.php'); 
require_once('include/connexion.inc.php');
require_once('libs/Smarty.class.php');
// Insertion header et menu HTML
include_once('include/header.inc.php');
include_once('include/nav.inc.php');

if (isset($_SESSION["notifications"])) {
  $color_notification = $_SESSION["notifications"]["result"] == TRUE ? 'success': 'danger';
}

if (isset($_POST['submit'])) {
 
  $notifications="";
  /* @var $bdd PDO */
  $sql_insert = "SELECT * FROM utilisateurs WHERE email = :email AND mdp = :mdp";
  
  
  $sth = $bdd->prepare($sql_insert);
      //securisation des variable
  $sth->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
  $sth->bindValue(':mdp',cryptPassword($_POST['mdp']),PDO::PARAM_STR);

  
  $sth->execute();
  
  if($sth->rowCount() < 1){

    $notification = "<b>ECHEC</b> login / mot de passe incorrecte";
    $result_notification = FALSE;
    $url_redirect = 'connexion.php';              
  } else{

    $sid= sid($_POST['email']);
    
            //mise a jour du sid dans la base de donnée 
    $sql_update = "UPDATE utilisateurs SET sid = :sid WHERE email = :email;";
    $sth_update = $bdd->prepare($sql_update);
    
    $sth_update->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
    $sth_update->bindValue(':sid',$sid,PDO::PARAM_STR);
    
    $result_update = $sth_update->execute();
    
    setcookie('sid',$sid,time() + 86400);
    
    $notification = "<b>Felicitation</b> vous étes connecté!";
    $result_notification = TRUE; 
    $url_redirect = 'index.php';
  }
  
  $_SESSION["notifications"]["message"] = $notification;
  $_SESSION["notifications"]["result"] = $result_notification;  
  header("Location:index.php");
  exit();
  
} else{
  $smarty = new Smarty(); 

  $smarty->setTemplateDir('template/');
  $smarty->setCompileDir('templates_c/');

  include_once ('include/header.inc.php');
  include_once ('include/nav.inc.php'); 

  $smarty->display('connexion.tpl');
// Insertion footer HTML
  include_once('include/footer.inc.php');
}
?>