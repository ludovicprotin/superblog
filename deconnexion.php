<?php
// active la session
session_start(); 
// Chargement des fichiers de configuration
require_once('config/init.conf.php');
require_once('config/bdd.conf.php');
require_once('include/fonction.inc.php');

session_destroy();
setcookie('sid','',-1);
header('Location: index.php'); 
?>
