<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width" />
     	       <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.min.js"></script>
             <script src="Bootstrap/js/scripts.js"></script>
             

  <body style='background-color:#373737'>
  	<div class="container">
  	
  		

<div class='row '>
  <div class="page-header">
       <div class="row">
         <h3><?php $_SESSION['prenom'] ?></h3>
       </div>

       <div class="row">
         <h3><?php $_SESSION['nom'] ?></h3>
       </div>

       <div class="row">
        <h3><?php ?></h3>
       </div>
    <?php 

           
            if ($_SESSION['compt_visit']==1) //on visite pour la premiere fois la page
            {
              echo '<div class="alert alert-warning alert-success" role="alert">
           <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Ouverture de session reussie!!!! Bienvenue </strong> </div>';
              $_SESSION['compt_visit']++;
            }
           

           

     ?>


  </div>
  </div>

	 
    


  	</div>
    


  </body>

</html>