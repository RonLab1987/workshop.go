<?php include_once 'pricelist_class.php'; ?>

 <?php  if($_POST['AddSubmit']){
    $pricelist = new pricelist;
    $pricelist->pricelistAdd();
    } 
 ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>тест</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <?php
      $pricelist = new pricelist;
      echo $pricelist->pricelistTable("table text-lowercase","bg-primary text-uppercase");
      ?>

    </div> <!-- /container -->

     <div class="container">
      <div  > 
       <p class="lead text-uppercase">добавить новую позицию<p>
        
       <form class="form" action="test-pricelist.php" method="post">
         <input class="form-control text-uppercase" type="text" name="plgName" id="plgName" list="priselistgroupSelect" placeholder="выбери группу или добавь новую">
            <datalist id="priselistgroupSelect" >
              <?php
              echo $pricelist->pricelistGroupOptionList();
              ?>
            </datalist>
         <input class="form-control text-lowercase" type="text" name="plName" id="plName" placeholder="имя позиции">
         <input class="form-control" type="number" name="plPrice" id="plPrice" placeholder="цена">
         <button class="btn btn-primary btn-block" type="submit" name="AddSubmit" value="TRUE">добавить</button>
         
         
       </form>  
         

     

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

