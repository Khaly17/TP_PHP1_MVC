<?php

/**
 * On importe les fichiers neccessaires
 */
require '../Modele/config.php';
require 'index.php';
require '../Modele/db.php';

/**
 * Creation de nos diffrrentes objets
 */
$obj = new db;
$obj ->connect();
$etudiant = new Etudiant($_POST['matricule'],$_POST['nom'],$_POST['prenom']);

/**
 * On ajoute un etudiant
 */ 
$obj->addEtudiant($etudiant);

//On affiche tous les etudiants
//$obj->getEtudiant();
//On affiche l'etudiant dont le matricule est 2021
//$obj->setEtudiantwithID('202120SAF');
?>