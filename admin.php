<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="includes/assets/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="glavcontent">
            
<?php 
require 'includes/db.php';

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
              
                 $res = ("select * from `menu` WHERE `menu`.`name`LIKE '%$query%' ");
                ( $result=$db->query($res));
                 
                  if ($result->num_rows>0){
                     while ($row=$result->fetch_assoc()){
                   require 'includes/blokc.php';
                    
             
                     }
                    
                  }
              
              }


?>
<div class="blokc">
   <a href="admin/blogTable.php">
      <h1>Дабавит Блок</h1>
   </a>
</div>
            </div>
</body>
</html>