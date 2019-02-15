<?php
// Chargement des fichiers de configuration
session_start();
require_once('config/init.conf.php');
require_once('config/bdd.conf.php');
require_once ('include/fonction.inc.php');
require_once('include/connexion.inc.php');  
require_once('libs/Smarty.class.php');
if(isset($_POST['modifier'])) {
 $sql_update = "UPDATE article "
 . "SET titre = ?, texte = ? "
 . "WHERE id = ?";

 $sth = $bdd->prepare($sql_update);

 $sth->execute(array($_POST['titre'], $_POST['texte'], $_GET['idArticle']));

      //Traitement de l'image 
 $id_article=$_GET['idArticle'];
      //Localisation du fichier et mise en minuscule du nom du fichier
 if ($_FILES["image"]["error"]==0){
  $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
  $extension = strtolower($extension);
          //supp de l'image de l'article a modifier
  unlink('images/'. $id_article.'.'.$extension);
          //Déplacement du fichier et renommage avec la bonne extension
  $result_img = move_uploaded_file($_FILES["image"]["tmp_name"], 'images/'. $id_article.'.'.$extension);
}
header("Location:index.php");
exit();
} else{

 $smarty = new Smarty(); 

    //verification si modification 
 if(isset($_GET["idArticle"])) {
  $infoArticle[] = getInfoArticle($bdd, $_GET['idArticle']);

  $smarty->assign(array("id" => $infoArticle[0]['id'],
    "title" =>$infoArticle[0]['titre'],
    "text" => $infoArticle[0]['texte'])
);
}

if(isset($_GET['deleteArticle'])) {
  deleteArticle($bdd, $_GET['idArticle']);
  header("Location:index.php");
  exit();
}

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');

include_once ('include/header.inc.php');
include_once ('include/nav.inc.php'); 

$smarty->display('editArticle.tpl');

// Insertion footer HTML
include_once('include/footer.inc.php');
}
?>