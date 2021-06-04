<?php

/**
 * la classe  db etend la classe config
 */
class db extends config{ 

    public function getEtudiant(){
        $sql = "SELECT * FROM etudiant";
        $res = $this->connect()->query($sql);
        while($row = $res->fetch()){
            echo 'Prenom : '.$row['prenom'].'<br>';
            echo 'Nom    : '.$row['nom'].'<br>';
            echo 'Matricule :'.$row['Matricule'].'<br>';

            if($row['etatInscription'] == 0){
                echo 'Etat d\' inscription : Expirée <br><br>';
            } else {
                echo 'Etat d\' inscription : Valide <br><br>';
            }  
        }
    }
    
    /**
     * Afficher etudiant dont le matricule est passe en parametre
     */
    public function setEtudiantwithID($matricule){
        $sql = "SELECT * FROM etudiant WHERE Matricule = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$matricule]);
        $etudiants = $stmt->fetchAll();

        foreach($etudiants as $etudiant){
            echo 'Prenom : '.$etudiant['prenom'].'<br>';
            echo 'Nom : ',$etudiant['nom'].'<br>';
            echo 'Matricule : '.$etudiant['Matricule'].'<br>';

            if($etudiant['etatInscription'] == 0){
                echo 'Etat d\' inscription : Expirée <br><br>';
            } else {
                echo 'Etat d\' inscription : Valide <br><br>';
            }        
        } 
        
    }
    
    /***
     * Ajouter un nouveau etudiant
     */
    public function addEtudiant(Etudiant $etu){
       try{
            $nom = $etu->getNom();
            $prenom = $etu->getPrenom();
            $matricule = $etu->getMatricule();
            $etatInscription = $etu->getEtatInscription();

            $sql = "INSERT INTO etudiant (Matricule,nom,prenom,etatInscription) VALUES (?,?,?,?)";
            $res = $this->connect()->prepare($sql);
            $res->execute(array($matricule,$nom,$prenom,$etatInscription));
            echo 'Bien sa marche';
       } catch(Exception $e){
           echo "Erreur".$e->getMessage();
       }
    }

}
