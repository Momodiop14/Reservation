<?php
     require_once 'modele/Base.class.php';
     require_once 'modele/Chambre.class.php';
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

		 	 public static function getOccupants($chamb)
		 	
		 	{ 
		 		  $pdo=Base::getBDD();
		 		  $id_chambre=Chambre::getId($chamb);
                  $query=$pdo->prepare('select prenom , nom  from etudiant , reservation where identifiant=No_Etu and chambre_reserve=? ');
                  $query->execute(array($id_chambre));
                  $rows=$query->fetchAll();
                  
                  return $rows;
		 		
		 	}



 

 }



?>