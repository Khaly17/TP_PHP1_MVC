#==========Etudiant===============
1-Nom
2-Prenom
3-Etat d'Inscription valide|expiree



    public function statutInscription($statut){
        if($statut == 0){
            echo 'Etat d\' inscription : Expirée <br><br>';
        } else {
            echo 'Etat d\' inscription : Valide <br><br>';
        } 
    }