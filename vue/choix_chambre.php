<!doctype html>


     <head>
             <meta name="viewport" content="width=device-width" />
     	       <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
             <script src="js/jquery.js"></script>
             <script src="Bootstrap/js/bootstrap.min.js"></script>
             
             <script type="text/javascript">
                $(document).ready(function()        

                  { 

                       $('.etages').hide();

                        $('button.libele').mouseenter(function () 

                           {
                              if ($(this).children('span:eq(0)').attr('class')=='glyphicon glyphicon-plus')
                                   $(this).attr('data-content','afficher cet etage') ;
                                  else
                                     $(this).attr('data-content','masquer cet etage') ;

                              $(this).popover("show");
                           });

                          $('button.libele').mouseenter(function () 

                           {
                              if ($(this).children('span:eq(0)').attr('class')=='glyphicon glyphicon-plus')
                                   $(this).attr('data-content','afficher cet etage') ;
                                  else
                                     $(this).attr('data-content','masquer cet etage') ;

                              $(this).popover("show");
                           });

                         $('.btn').mouseleave(function () 

                           {
                              
                              $(this).popover("hide");
                           });

                       $(' tr.etages td button').css('display','none');


                       $('.btn').click(function ()
                             {
                                  id=$(this).parents('tr').attr('id'); 
                                
                                if ($(this).children('span:eq(0)').attr('class')=='glyphicon glyphicon-plus') 
                                  {
                                   

                                    $('#'+id+' +tr.etages').show(1000);

                                    

                                    function afficherItem () 
                                        {
                                           item=$('#'+id+' +tr.etages td button:hidden:first');
                                           item.show(350);
                                           window.setTimeout(afficherItem,500);

                                       }

                                       afficherItem();

                                    $(this).children('span:eq(0)').attr('class','glyphicon glyphicon-minus');
                                  }

                                else
                                   if ($(this).children('span:eq(0)').attr('class')=='glyphicon glyphicon-minus') 
                                  {
                                      $('#'+id+' +tr.etages').hide(1000);
                                     
                                     $('#'+id+' span').attr('class','glyphicon glyphicon-plus');
                                  }
                    


                                
                          });
                                                    
                    });

                            
                          

                      

             </script>
     

              
     </head>
 

     
  <body >
  	<div class="container" style='white' >
  	
  		<?php   require_once 'header.php'; ?>


        <div class="row">


           <div class='col-lg-offset-3 col-lg-6'>
        
              <table class="table table-bordered table-striped ">
              
            <?php
                  for ($i=0;$i<count($etage);$i++)
                  {
                     $etage_i=$etage[$i];
                     if ($i==0) 
                        $libelle="Rez de chaussee";
                       else
                          $libelle=$i."e Etage";  
                     

                        echo'<tr><td colspan="2">'.$libelle.'</td></tr>';
                        echo '<tr>';

                        $k=0;
                                  foreach ($couloir[$i] as $couloir_i)
                                  {
                                    
                                    
                                    echo '<td>';
                                                  
                                                          foreach ($chambre[$i,$k] as $chambro) 
                                                          { 
                                                            

                                                             echo $chambro['Code_Chambre'];
                                                          }
                                                          $k++;
                                                  
                                    echo '</td>';
                                                  
                                  }  
                        echo '</tr>';

                       
                  }
       ?>
           </div>
      
              </table>
         </div>

        




      




            
             

  </div>
    


  </body>

</html>