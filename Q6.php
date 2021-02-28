<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/index.css">
</head>
<body>

<?php
$arr3=[
    [
      'name' => 'ahmed hamdy',
       'job' => 'front-end',
      'experience' => 3
     ],
  
     [
         'name' => 'mohammed shaker',
         'job' => 'back-end',
         'experience' => 2
     ],
  
     [
         'name' => 'ali hasan',
         'job' => 'full-stack',
         'experience' => 4
     ],
 ];
 
 ?> 
 <div class="container">
 <div class="row">
         <?php foreach($arr3  as $key => $value){ ?>
            <div class=" col-md-4 text-center p-2 ">
                  <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body bg-primary ">
                <h4 class="card-title"><?= $value['name']?></h4>
                <p class="card-text"><?= $value['job']?></p>
                <p class="card-text"><?= $value['experience']?></p>
            </div>
          </div>
 <?php } ?>
 </div>
 </div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>    
</body>
</html>