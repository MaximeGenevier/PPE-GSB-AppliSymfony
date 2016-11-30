<?php

use PDO;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ModeleGSB{
    private static $modele = null;
    
    private function _construct(){
        $modele = $this->get('dbFrais');
    }
    
    public static function getModele(){
        if(is_null(self::$modele)){
            $modele = $this->_construct();
        }
        return $modele;
    }
    
    public function getUtilisateur($table,$login,$password){
        $requete = "Select * from :table";
        $statement = $this->getModele()->prepare($requete);
        $statement->execute(array(':table'=>$table));
        $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }    
    
}
