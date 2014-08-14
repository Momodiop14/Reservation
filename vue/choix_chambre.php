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
                    


                                //var item = $('td:hidden:first');                      
                                //$(item).show('slow');
                               // window.setTimeout(afficherItem,100);
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
              for ($i=count($etage)-1;$i>=0;$i--)
              {
                 $etage_i=$etage[$i];

                 if (intval($etage_i['niveau_Etage'])==0) 
                    $libelle="Rez de chaussee";
                   else
                      $libelle=$i."e Etage";  
                 

                    echo'<tr id="ligne'.$i.'" class="title_level"><td  colspan="2"> <button  style="margin-right:10px" class="btn libele" data-toggle="popover" data-placement="top"  data-content="">

                                 <span class="glyphicon glyphicon-plus"></span>
                           </button>'.$libelle.'   </td></tr>';
                   
                    echo '<tr class="etages">';
                              foreach ($couloir[$i] as $couloir_i)
                              {
                                
                                echo '<td>';
                                            foreach ($chambre[$i] as $chambro) 
                                            { 
                                               #var_dump($chambro);

                                               echo '<button style="margin-bottom:10px" class="btn btn-info">'.$chambro['Code_Chambre'].'</button>'.'  ';
                                            }
                                          
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