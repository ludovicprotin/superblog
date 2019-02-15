<?php
// active la session
session_start();

// Chargement des fichiers de configuration
require_once('config/init.conf.php');
require_once('config/bdd.conf.php');
require_once ('include/fonction.inc.php');
require_once('include/connexion.inc.php');  
require_once('libs/Smarty.class.php');
// Insertion dans la base de données
if (isset($_POST['submit'])) {
      //récupération des valeurs de la fonction
  $idUtilisateur = getIdUtilisateur($bdd);

  $publie = isset($_POST["publie"])? $_POST["publie"]:0;
  $date = date("Y-m-d");

  /* @var $bdd PDO */
  $sql_insert = "INSERT INTO article(titre, texte, publie, date, idUtilisateur) "
  . "VALUES (:titre, :texte, :publie, :date, :id);";

  $sth = $bdd->prepare($sql_insert);

      //securisation des variable
  $sth->bindValue(':titre',$_POST['titre'],PDO::PARAM_STR);
  $sth->bindValue(':texte',$_POST['texte'],PDO::PARAM_STR);
  $sth->bindValue(':publie',$publie,PDO::PARAM_BOOL);
  $sth->bindValue(':date',$date,PDO::PARAM_STR);
  $sth->bindValue(':id',$idUtilisateur,PDO::PARAM_INT);
  
  $result = $sth->execute();
  var_dump($result);

      //Traitement de l'image 
  $id_article=$bdd->lastInsertId();
      //Localisation du fichier et mise en minuscule du nom du fichier
  if ($_FILES["image"]["error"]==0){
    $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $extension = strtolower($extension);
          //Déplacement du fichier et renommage avec la bonne extension
    $result_img = move_uploaded_file($_FILES["image"]["tmp_name"], 'images/'. $id_article.'.'.$extension);
  }
     //type de notification affiché selon l'action
  $notification = "<b>Felicitation</b> votre article a été créé!";
  $result_notification = TRUE;

  $_SESSION["notifications"]["message"] = $notification;
  $_SESSION["notifications"]["result"] = $result_notification;  




  header("Location:index.php");
  exit();
}  else {

  $smarty = new Smarty(); 

  $smarty->setTemplateDir('template/');
  $smarty->setCompileDir('templates_c/');

  include_once ('include/header.inc.php');
  include_once ('include/nav.inc.php'); 

  $smarty->display('article.tpl');

// Insertion footer HTML
  include_once('include/footer.inc.php');
}

?>