<?php


  /**
  * 
  */
  class Couloir 
    {
       private $id_couloir;
       private $position_couloir;
       private $genre_couloir;
       private $ref_etage;
       

    
         function __construct($code_couloir,$position,$id_etage,$genre)
          {
              $this->id_couloir=$code_couloir;  
              $this->position_couloir=$position;
              $this->ref_etage=$id_etage;
              $this->genre_couloir=$genre;
            

          }


          public static function getCouloirsEtage($etage)
               {
                $bdd=Base::getBDD();
                $req=$bdd->prepare('SELECT Code_Couloir from couloir where Ref_Etage= ? ');

                $req->execute(array($etage));
                $rep=$req->fetchAll();

                return $rep;
               }


  }


?>
