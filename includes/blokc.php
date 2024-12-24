
<?php
echo '<div class="blokc">';      
//   echo '<button class="btnlike"><i class="fa fa-cart-arrow-down"></i></button>';
  echo '<a href="post.php?id= '.$row["id"].' "><img style="width: 155px;height: 170px;
" src="'.$row["img_src"].'"></a>';
echo '<h5 class="mt-3">'.$row['цена'].' Сомонӣ</h5>';
echo "<h6>".$row['Имя']."</h6>";      

#echo ' <button class="btn btn-primary down " type="submit"><i class="fa fa-cart-arrow-down">&trade; покупка</i></button> ';
echo '<div class="downLicke">
<button class="btn btn-primary down  " type="submit"><i class="fa fa-cart-arrow-down">&trade;покупка
</i></button>  
<button class="btnlike btn ml-2"><i class="fa fa-heart" ></i></button>

</div>';
echo' </div>';
 ?>
