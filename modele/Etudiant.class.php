<?php
     require_once 'modele/Base.class.php';
 /**
 * 
 */
 class Etudiant 
 {
 	
	 	function __construct()
		 	{
		 		
		 	}

		 	public static function getParam()
			  {
			 	  $pdo=Base::getBDD();
                  $query=$pdo->prepare('select * from parametre_reservation');
                  $query->execute();
                  $rows=$query->fetchAll();
                  return $rows;

			  }

	 	    public static function seConnecter($pseudo,$pwd)
		 	
		 	{ 
		 		  $pdo=Base::getBDD();
                  $query=$pdo->prepare('select nom,prenom ,identifiant,sexe_etudiant from etudiant where identifiant=? and mot_pass_etudiant=?');
                  $query->execute(array($pseudo,sha1($pwd)));
                  $rows=$query->fetchAll();
                  return $rows;
		 		
		 	}
 

 }



?>