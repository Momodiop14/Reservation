<?php
  /**
  * 
  */
  class Chambre 
  {
  	   private $code_chambre;
  	   private $ref_couloir;
     
  	
  	  function __construct($id_chambre,$no_couloir)
  	     {
  		     $this->code_chambre=$id_chambre;
  		     $this->ref_couloir=$no_couloir;
  	     }


  	   public function createChambre()
  	     {
  		      
  	    			$req=Base::getBDD()->prepare('insert into chambre (Code_chambre,Ref_couloir) values (?,?)');
		      		$req->execute(array($this->code_chambre,$this->ref_couloir)); 
	     }


	   public static function getChambre($pavillon) //methode retournant les chambres d'un pavillon
	       {
	             
  		        
			       	$req=Base::getBDD()->prepare('select enregistrement_chambre,Code_chambre,Ref_Couloir from chambre,couloir,etage where Ref_Couloir=Code_Couloir and Ref_Etage=Code_Etage and Ref_Pavillon=:pav');
			       	$req->execute(array(':pav'=>$pavillon)); 
			      	$ligne=$req->fetchAll();
			      	return $ligne;
	       }

      public static function setChambre($id,$chamb,$couloir) //methode retournant les chambres d'un pavillon
         {
              var_dump($couloir);
              var_dump($chamb);
              
              
              $query=Chambre::$base->prepare('update chambre set Ref_Couloir=? and Code_chambre=? where enregistrement_chambre=?');
              $query->execute(array($couloir,$chamb,$id));
               
              #return $count;
              
         }

     public static function delChambre($id) //methode supprimant une chambre 
         {
             
            
              $req=Base::getBDD()->prepare('delete from chambre where enregistrement_chambre=:cod');
              $req->execute(array('cod'=>$id)); 
              $ligne=$req->rowCount();
              var_dump($ligne);
              
         }

  }

?>