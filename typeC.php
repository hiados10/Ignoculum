<?php

include "C:/xampp9/htdocs/projetWeb/config.php";

class TypeC {
    
    function AjouterType($type)
    {
        $IDtype=$type->GetIdtype();
        $libelle=$type->GetLibelle();
        $database=config::GetConnexion();
          $q = $database->prepare("INSERT INTO typee (libelle) VALUES (:libelle)");
          $q->bindParam(":libelle",$libelle);
          $q->execute();
    }

    function AfficherType(){
			
        $sql="SElECT * From typee";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }


    function recupererType($IDtype){
        $sql="SELECT * from typee where IDtype=$IDtype";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function SupprimerType($IDtype)
    {
        $database=config::GetConnexion();
          $q = $database->prepare("DELETE FROM typee where IDtype=:IDtype");
          $q->bindParam(":IDtype",$IDtype);
          $q-> execute();
    }

    function modifierType($type, $IDtype){
        $sql="UPDATE typee SET IDtype=:IDtype, libelle=:libelle WHERE IDtype=:IDtype";
        //var_dump($sql);
        $db = config::getConnexion();
        try{		
            $req=$db->prepare($sql);
            $libelle=$type->getLibelle();
          
            $datas = array( ':IDtype'=>$IDtype,':libelle'=>$libelle);
            
            $req->bindValue(':IDtype',$IDtype);
            $req->bindValue(':libelle',$libelle);
     
            
            //var_dump($req);
            $req->execute();
            //echo $req->rowCount() . " records UPDATED successfully";
        }
        catch (PDOException $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
    }
}


?>