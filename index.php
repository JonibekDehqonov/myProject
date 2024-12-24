<?php require 'includes/header.php'; ?>  
   
<?php require 'includes/leftmenu.php' ?> 
        <div class="glavcontent">
            
            <?php 
                              
           
             require "includes/db.php";
              $query=isset($_POST['search']) ? $_POST['search']:'';
              if (empty($query)){
                $res = ("select * FROM `menu`");
                $result=$db->query($res);
                 if ($result->num_rows>0){
                    while ($row=$result->fetch_assoc()){
                   require 'includes/blokc.php';

   
                    }
                   
                 }
              }






              
              else{
              
                 $res = ("select * from `menu` WHERE `menu`.`Имя` LIKE '%$query%' ");
                ( $result=$db->query($res));
                 
                  if ($result->num_rows>0){
                     while ($row=$result->fetch_assoc()){
                   require 'includes/blokc.php';
                    
             
                     }
                    
                  }
              
              }
              
            ?>
        </div>

    </div>
    
   <?php require 'includes/footer.php' ?>   