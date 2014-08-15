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

	 	    public static function seConnecter($pseudo)
		 	
		 	{ 
		 		  $pdo=Base::getBDD();
                  $query=$pdo->prepare('select nom , prenom ,formation_etudiant,sexe_etudiant from etudiant where identifiant=? ');
                  $query->execute(array($pseudo));
                  $rows=$query->fetchAll();
                  return $rows;
		 		
		 	}
 

 }



?>