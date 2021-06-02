<?php

    //On importe les fichiers neccessaire
    require 'config.php';
    require 'index.php';
    require 'db.php';

    //Creation de nos objets
    $obj = new db;
    $obj ->connect();
    $etudiant = new Etudiant('201808WUC','DIENG','Khaly',1);
    
    //On ajoute l'etudiant $etu
    //$obj->addEtudiant($etudiant);

    //On affiche tous les etudiants
    $obj->getEtudiant();
    //On affiche l'etudiant dont le matricule est 2021
    //$obj->setEtudiantwithID('2021');
