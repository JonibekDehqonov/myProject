<?php require 'includes/header.php' ?>
<style>

 .img{   
align-items: center;
   display: flex;
   flex-direction: column;
   width: 300px; 
   height: 300px;
    margin: 10px;
    font-size: clamp(10px, 4vw, 20px);
 }
 img{
    /* background-size: cover; */
    width: 100%;
    height: 100%;
 }

</style>

    
        
        <?php
        require 'includes/db.php';
        $id= $_GET["id"];
            $res = ("select * from `menu` WHERE `menu`.`id`= $id ");
                ( $result=$db->query($res));

                if ($result->num_rows>0){
                    while ($row=$result->fetch_assoc()){
                        echo '<div class="columpost downLicke col-xl-7 ">
                            <div class="img">';
                        echo ' <img src="'.$row["img_src"].'"><br>';
                      echo ' <h3 style="margin-left:20px">'.$row["цена"].' Сомони</h3>';
                      echo ' <button class="btn btn-primary down  " type="submit"><i class="fa fa-cart-arrow-down">&trade;покупка
                  </i></button>
                  </div>   ';
                     echo '  <div class="sum">';
                      echo '<h3 class="mt-5">'.$row["Имя"].'</h3>';
                      echo '<p>Процессор: '.$row["Процессор:"].'</p>';
                      echo '<p> Экран:'.$row["Экран:"].'</p>';
                      echo '<p>Основной камера: '.$row["Основной камера:"].'</p>';
                      echo '<p> Фаронталная камера: '.$row["Фаронталная камера:"].'</p>';
                      echo '<p> Память: '.$row["Память:"].'</p>';
                      echo '<p> Оперативная: '.$row["Оперативная память:"].'</p>';
                      echo '<p>Аккумулятор: '.$row["Аккумулятор:"].'</p>';
                      echo '<p> Поддержка: '.$row["Поддержка SIM:"].'</p>';
                      echo '<p>Поддержка карт: '.$row["Поддержка карт:"].'</p>';
                      echo ' </div>
                            </div>';
                    }
                }
         ?> 
<?php require 'includes/footer.php' ?>