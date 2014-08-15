<?php
               #require_once 'Vue/Vue.php';
               require_once 'modele/Etudiant.class.php';

				
				/**
				* 
				*/
				class Ctr_Authentification 
				{

					
                     
 
					  public function connexion($pseudo)//affichage  du formulaire d'authentification
					     {  
				             
                     $user=Etudiant::seConnecter($pseudo);

                     
                             if (count($user)==1) 
                             {
                                 session_start();
                                 $_SESSION['compt_visit']=1;
                                 $_SESSION['nom']=$user[0]['nom'];
                                 $_SESSION['prenom']=$user[0]['prenom'];
                                 $_SESSION['sexe']=$user[0]['sexe_etudiant'];
                                 $_SESSION['identifiant']=$pseudo ;
                                 $_SESSION['classe']=$user[0]['formation_etudiant'];
                                 
                                 
                                 require_once 'vue/page_reservation.php';                    
                              


                             }                            
                             
                         }


                      public function page_authentification()
                      {
                          require_once 'vue/login.php';
                      }



				  }

?>