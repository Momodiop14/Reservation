<?php

  /**
  * 
  */
  class Etage 
    {
    	 private $id_etage;
    	 private $pavillon;
    	 private $niveau_etage;

  	
  	     function __construct()
  	      {
  	        	
    	      }

  	      public function get_etages($nom_pav)
  	      {
  	      	 $base=Base::getBDD();
					   $req=$base->prepare("select Code_Etage ,niveau_Etage from etage Ref_pavillon=?");
					   $req->execute( array($nom_pav) ) ;
              
             $rows=$req->fetchAll();

             return $rows ;

               
          }


  }


?>