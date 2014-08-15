<?php
require_once 'modele/Etudiant.class.php';

class  Ctr_Reservation
	{

		 // verification de la periode de reservaton
		      public function verification()//affichage  du formulaire d'authentification
					     { 
                             $date=date("y-m-d");// recuperer la date que l'internaute a voulu se connecter
                             
                             $time=date('H:i');// recuperer l'heure que l'internaute a voulu se connecter
                             $params=Etudiant::getParam();
                             
		                        if (count($params)==1) 
		                          {
		                                                  

			                         if ( ( (strtotime($date) >strtotime($params[0]['date_debut']) )  && (strtotime($date) < strtotime($params[0]['date_fin'])) ) 

			                              || (  strtotime($date)==strtotime($params[0]['date_debut'])  && strtotime($time)>= strtotime($params[0]['heure_debut']) ) 

			                              || (strtotime($date)==strtotime($params[0]['date_fin'])  && strtotime($time)< strtotime($params[0]['heure_fin']) ) 


			                            )
			                              {
			                                  #require("vue/login.php");
			                              	  return true;
			                              }
			                              else 
                                           {
			                                  #echo "<h1>La reservation est indisponible pour le moment</h1>";
                                           	 return false;
			                              }

		                          }
	                          else
                                 #echo "<h1>La reservation est fermee pour le moment</h1>";
	                          	return false ;


                 }

		



	}