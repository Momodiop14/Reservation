<?php
						require_once('modele/Chambre.class.php');

				/**
				* 
				*/
				class Ctr_Batiment
				{
					
					private $chambre;
					
					
					  public function delete_chambre($id)
					  {
					  	  $recup_id=explode("_", $id);
					  	  Chambre::delChambre(intval($recup_id[1]));
					  }

					   
					  	    


					  





				    public function page_new_pavillon()
				      {
					      require_once 'vue/ajout_pavillon.php';
				     }
 

			    }

?>