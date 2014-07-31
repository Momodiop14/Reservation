<?php
		require_once 'Controleur/Ctr_Batiment.php';
		require_once 'Controleur/Ctr_Authentification.php';
		require_once 'Controleur/Ctr_Etudiant.php';
		require_once 'Controleur/Ctr_Reservation.php';
		
		class Routeur 
	  {
	  	  private  $ctr_accueil_auth;
          private  $ctr_etud;
          private  $ctr_reservation;
         
           function __construct() 
		    {
		    	 
		    	 $this->ctr_pav=new Ctr_Batiment();
		    	 $this->ctr_etud= new Ctr_Etudiant();
		    	 $this->ctr_reservation=new Ctr_Reservation();
		    	 $this->ctr_accueil_auth=new Ctr_Authentification();

		    }
		  
		  // Traite une requête entrante
		  public function routerRequete() 
		  {
		    
			      if (isset($_REQUEST['action']) ) 
			      {
					     switch ($_REQUEST['action']) 

					     {
					         case 'logout':
					         	{
					         		session_start();
					         		session_destroy();
					         		$this->ctr_accueil_auth->page_authentification();

					         	}
					         	break;


					         case 'login':
					     	                  {

									            if ( (isset($_REQUEST['login'])) && (isset($_REQUEST['password'])) )
									                 {
									                   	
									                   	 $this->ctr_accueil_auth->connexion($_REQUEST['login'],$_REQUEST['password']);
									                 }
									             else									             
                                                 $this->ctr_accueil_auth->page_authentification();
                                                
                                              } 
					      	   break;

					      



					      	 					      	 		
			                 }
                }
		           else  
		           	    
		           	     {  // il y a aucun parametre,affichage de l'accueil
                             
		           	                         	 
								        $this->ctr_accueil_auth->page_authentification();
								 


	                                                                                               	 
		           	                
                         }
                 
                     
         }
         
      }

  






?>