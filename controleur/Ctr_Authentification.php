<?php
               #require_once 'Vue/Vue.php';
               require_once 'modele/Etudiant.class.php';

				
				/**
				* 
				*/
				class Ctr_Authentification 
				{

					  public function page_authentification()//affichage  du formulaire d'authentification
					     { 
                             $date=date("y-m-d");// recuperer la date que l'internaute a voulu se connecter
                             
                             $time=date('H:i');// recuperer l'heure que l'internaute a voulu se connecter
                             $params=Etudiant::getParam();
                             
                              

                         if ( ( (strtotime($date) >strtotime($params[0]['date_debut']) ) 

                                    && (strtotime($date) < strtotime($params[0]['date_fin'])) ) 

                              || (strtotime($date)==strtotime($params[0]['date_debut']) 

                                    && strtotime($time)>= strtotime($params[0]['heure_debut']) ) 

                              || (strtotime($date)==strtotime($params[0]['date_fin']) 

                                    && strtotime($time)>= strtotime($params[0]['heure_fin']) ) 


                            )
                              {
                                  require("vue/login.php");
                              }
                              else {
                                  echo "<h1>La reservation est indiponible pour le moment</h1>";
                              }


                            
						    
					     }
                     
 
					  public function connexion($pseudo,$pwd)//affichage  du formulaire d'authentification
					     {  
				             $user=Etudiant::seConnecter($pseudo,$pwd); 
                             if (count($user)==1) 
                             {
                                 session_start();
                                 $_SESSION['compt_visit']=1;
                                 $_SESSION['nom']=$user[0]['nom'];
                                 $_SESSION['prenom']=$user[0]['prenom'];
                                 $_SESSION['matricule']=$user[0]['identifiant'];
                                 
                                 require_once 'vue/page_reservation.php';                    
                              


                             }                            
                             
                         }



				  }

?>