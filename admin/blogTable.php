<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <title>Document</title>
</head>
<body>
    <table border "1">
    <tr>
           <th>№</th>
        <th>Имя</th>
        <th>цена</th>
        <th>img_src</th>
        <th>Процессор:</th>
        <th>Экран:</th>
        <th>Основной камера:</th>
        <th>Фаронталная камера:</th>
        <th>Память:</th>
        <th>Оперативная:    </th>
        <th>Аккумулятор:</th>
        <th>Поддержка: </th>
        <th>Поддержка карт:</th>
</tr>

  <form method='post'>
		<center><button type='submit' class='btn btn-primary' name='new' id='btn1'> 
			<i class='ace-icon fa fa-plus'></i>
			Сабти нав
		</button></center>
	</form>

    <?php


    $db = new mysqli("localhost","root","","progect"); 
    if(isset($_POST['new'])){
			echo "<form method='post'><tr>
				<td></td>
				<td><input class='col-xs-12' type='text' name='Имя' required=''></td>
				<td><input class='col-xs-12' type='text' name='цена' required=''></td>
				<td><input class='col-xs-12' type='text' name='img_src' required=''></td>
				<td><input class='col-xs-12' type='text' name='Процессор' required=''></td>
				<td><input class='col-xs-12' type='text' name='Экран' required=''></td>
				<td><input class='col-xs-12' type='text' name='ОсновнойКамера' required=''></td>
				<td><input class='col-xs-12' type='text' name='Фаронталная' required=''></td>
				<td><input class='col-xs-12' type='text' name='Память' required=''></td>
				<td><input class='col-xs-12' type='text' name='Оперативная' required=''></td>
				<td><input class='col-xs-12' type='text' name='Аккумулятор' required=''></td>
				<td><input class='col-xs-12' type='text' name='ПоддержкаСим' required=''></td>
				<td><input class='col-xs-12' type='text' name='ПоддержкаКарт' required=''></td>


				<td>
					<a href='' class='btn btn-xs btn-primary'><i class='ace-icon fa fa-undo'></i></a>
					<button type='submit' class='btn btn-xs btn-success' name='save'><i class='ace-icon fa fa-save'></i></button>
				</td> 
			</tr></form>";

		
		}
		
        
        if (isset($_POST['save'])){
            $ins=$db->query("INSERT INTO `menu` (`Имя`,`цена`,`img_src`,`Процессор:`,`Экран:`,`Основной камера:`,`Фаронталная камера:`,`Память:`,`Оперативная память:`,`Аккумулятор:`,`Поддержка SIM:`,`Поддержка карт:`) VALUES ('".$_POST['Имя']."',".$_POST['цена'].",'".$_POST['img_src']."','".$_POST['Процессор']."','".$_POST['Экран']."','".$_POST['ОсновнойКамера']."','".$_POST['Фаронталная']."','".$_POST['Память']."','".$_POST['Оперативная']."', '".$_POST['Аккумулятор']."','".$_POST['ПоддержкаСим']."','".$_POST['ПоддержкаКарт']."' )");
        }
		if ( isset($_POST['save_edit'])){
			$db->query("UPDATE `menu` SET `Имя`='".$_POST['Имя']."', `img_src`='".$_POST['img_src']."',`цена`=".$_POST['цена'].",`Процессор:`='".$_POST['Процессор']."',`Экран:`='".$_POST['Экран']."',`Основной камера:`='".$_POST['ОсновнойКамера']."',`Фаронталная камера:`='".$_POST['Фаронталная']."',`Память:`='".$_POST['Память']."',`Оперативная память:`='".$_POST['Оперативная']."',`Аккумулятор:`='".$_POST['Аккумулятор']."',`Поддержка SIM:`='".$_POST['ПоддержкаСим']."',`Поддержка карт:`='".$_POST['ПоддержкаКарт']."' WHERE id=".$_POST['save_edit'].";");	
	}
	if (isset($_POST['delete'])){
		$db->query("delete from `menu` where id=".$_POST['delete']);
	}


                $res = ("select * FROM `menu`");
                $i=1; 
                $result=$db->query($res);
                    while ($row=$result->fetch_assoc()){
						if(isset($_POST['edit']) and $_POST['edit']==$row['id']){
							echo "<form method='post'><tr>
						<td>".$i++."</td>
						<td><input class='col-xs-12' type='text' value='".$row['Имя']."' name='Имя' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['цена']."' name='цена' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['img_src']."' name='img_src' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Процессор:']."' name='Процессор' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Экран:']."' name='Экран' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Основной камера:']."' name='ОсновнойКамера' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Фаронталная камера:']."' name='Фаронталная' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Память:']."' name='Память' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Оперативная память:']."' name='Оперативная' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Аккумулятор:']."' name='Аккумулятор' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Поддержка SIM:']."' name='ПоддержкаСим' required=''></td>
						<td><input class='col-xs-12' type='text' value='".$row['Поддержка карт:']."' name='ПоддержкаКарт' required=''></td>
								
		
						<td>
							<a href='' class='btn btn-xs btn-primary'><i class='ace-icon fa fa-undo'></i></a>
							<button type='submit' class='btn btn-xs btn-success'value='".$row['id']."' name='save_edit'><i class='ace-icon fa fa-save'></i></button>
						</td> 
					</tr></form>";
						 }else{
							echo "<form method='post'><tr>'";
						echo '<tr>';
						 echo "<td>".$i++."</td>";
						 echo "<td>".$row['Имя']."</td>";
						 echo "<td>".$row['цена']."</td>";
						echo "<td>".$row['img_src']."</td>";
						echo "<td>".$row['Процессор:']."</td>";
						echo "<td>".$row['Экран:']."</td>";
						echo "<td>".$row['Основной камера:']."</td>";
						echo "<td>".$row['Фаронталная камера:']."</td>";
						echo "<td>".$row['Память:']."</td>";
						echo "<td>".$row['Оперативная память:']."</td>";
						echo "<td>".$row['Аккумулятор:']."</td>";
						echo "<td>".$row['Поддержка SIM:']."</td>";
						echo "<td>".$row['Поддержка карт:']."</td>";
						echo "<td>
							
							<button class='btn btn-xs btn-warning' type='submit' value='".$row['id']."' name='edit'><i class='ace-icon fa fa-pencil'></i></button>
								<button class='btn btn-xs btn-danger' type='submit' value='".$row['id']."' name='delete'><i class='ace-icon fa fa-trash'></i></button>
								
						</td>";
						

					}
					
				}
                 
				
		
?>
</body>
</html>