<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMARTFON.TJ </title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="includes/assets/css/fonts.googleapis.com.css">     -->
    <!-- <link rel="stylesheet" href="includes/assets/css/ace.mi    n.css" class="ace-main-stylesheet" id="main-ace-style"> -->
    <link rel="stylesheet" href="includes/assets/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<header>
     
        <input type="checkbox" name="" id="chk1">
        <div class="logo ">
            <h3>SMARTFON.TJ</h3>
        </div>
        <div class="search-box">
        
        <form action="" method="post">
                
         <input type="text" class="margin" name="search" id="srch" placeholder="search">
         <button type="submit" class="margin"><i class="fa fa-search"></i></button>
     </form>
  
            </div>

        <div class="col">
            <div class="profl " id="openModal">
                <i class="fa fa-user " aria-hidden="true"></i>
                <p>Войти</p>
            </div>
            <!-- <button id="openModal">Открыть модальное окно</button> -->
            <?php require 'includes/modal.php' ?>
            <?php require 'includes/korzina.php' ?>
        <div class="menu p-3">
            <label for="chk1">
                <i class="fa fa-bars"></i>

            </label>
        </div>

    </header>
