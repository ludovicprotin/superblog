<?php
// active la session
session_start(); 
// Chargement des fichiers de configuration
require_once('config/init.conf.php');
require_once('config/bdd.conf.php');
require_once('include/connexion.inc.php');
require_once('include/fonction.inc.php'); 
require_once('libs/Smarty.class.php');


$smarty = new Smarty(); 

$smarty->setTemplateDir('template/');
$smarty->setCompileDir('templates_c/');

  //affichage de la notification
if (isset($_SESSION["notifications"])) {
  $_SESSION["notifications"]["color"] = $_SESSION["notifications"]["result"] == TRUE ? 'success': 'danger';
  $smarty->assign("notification", $_SESSION["notifications"]);
  unset($_SESSION["notifications"]);
}

if(!isset($_GET['page'])) {
  $_GET['page'] = 1;
}
$page_courante = $_GET['page'];
$index_depart_MySQL = indexPagination($page_courante, _nb_art_par_page);

$nb_total_article_publie = nb_total_article_publie($bdd);
$nb_pages = ceil($nb_total_article_publie / _nb_art_par_page);

$smarty->assign("pageCourante", $page_courante);
$smarty->assign("nbPages", $nb_pages);

            // Recherche les élément dans la base
if(isset($_GET['search'])) {
  $tab_articles = searchArticle($bdd, $_GET['search']);
  if(empty($tab_articles)) {
    $tab_articles = getArticles($bdd, $index_depart_MySQL);
    $_SESSION["notification"]["message"] = "Aucun article ne correspond à votre recherche :/";
    $_SESSION["notification"]["color"] = "danger";
    $smarty->assign("notification", $_SESSION["notification"]);
    unset($_SESSION["notifications"]);
  }
  $smarty->assign("tabArticle", $tab_articles);
  $smarty->assign("cookies", $_COOKIE);
  $smarty->assign("bdd", $bdd);
} else {
  $tab_articles = getArticles($bdd, $index_depart_MySQL);

  $smarty->assign("tabArticle", $tab_articles);
  $smarty->assign("cookies", $_COOKIE);
  $smarty->assign("bdd", $bdd);
}


include_once ('include/header.inc.php');
include_once ('include/nav.inc.php'); 

$smarty->display('index.tpl');
// Insertion footer HTML
include_once('include/footer.inc.php');

?>

