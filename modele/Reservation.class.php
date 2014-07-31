<?php
	
			/**
			* definition de la classe PAVILLon
			*/
			class Departement 

			{ 
				
				private $nomDept ;
				private $id;
				
				

				function __construct() //constructeur pour insertion
				     
				     {
					     
			         }

				
				 
				  public static function CreateDept($name)
					  {
					  	 	  $base=Base::getBDD();
					  	 	  $req=$base->prepare('insert into departement (nom_departement) values (:name)');
					  	      $req->execute(array('name'=>$name));
					  	      $count=$req->rowCount();
					  	      return $count;
					  }

					   public function UpdatePavillon($value='')
					  {
					  	
					  }

					   public static function DeletePavillon($nom_pav)
					      {
					  	    
					      }
				         
				       public static function getPavillon($name_pav)
					  {
					  	     
					  }
			}



		


			