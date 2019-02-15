<?php
// Chargement des fichiers de configuration
session_start();
require_once('config/init.conf.php');
require_once('config/bdd.conf.php');
require_once ('include/fonction.inc.php');
require_once('include/connexion.inc.php');  
require_once('libs/Smarty.class.php');

$smarty = new Smarty(); 


if(isset($_GET['deleteComent'])) {
	deleteComent($bdd, $_GET['deleteComent']);
}

    //verification si modification 
if(isset($_GET["idArticle"])) {
	$infoArticle[] = getInfoArticle($bdd, $_GET['idArticle']);

	$smarty->assign(array("idArticle" => $infoArticle[0]['id'],
		"title" =>$infoArticle[0]['titre'],
		"text" => $infoArticle[0]['texte'],
		"image" => "images/".$infoArticle[0]['id'].".jpg"
	));

	if(isset($_GET["addComent"])) {
		$sql_insert = "INSERT INTO commentaires(email, pseudo, texte, date, idArticle) "
		. "VALUES (:email, :pseudo, :texte, NOW(), :id);";

		$sth = $bdd->prepare($sql_insert);

	      //securisation des variable
		$sth->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
		$sth->bindValue(':pseudo',$_POST['pseudo'],PDO::PARAM_STR);
		$sth->bindValue(':texte',$_POST['coment'],PDO::PARAM_STR);
		$sth->bindValue(':id',$_GET['idArticle'],PDO::PARAM_INT);
		
		$result = $sth->execute();
	}
	$smarty->assign("coments", getComents($bdd, $_GET['idArticle']));

}

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');

include_once ('include/header.inc.php');
include_once ('include/nav.inc.php'); 

$smarty->display('viewArticle.tpl');

// Insertion footer HTML
include_once('include/footer.inc.php');
?>