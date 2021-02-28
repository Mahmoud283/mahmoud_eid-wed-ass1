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
    
 <table class=" container table table-striped table-bordered text-center ">
     <tbody>
     <tr class="text-center">
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
      <th scope="col">4</th>
      <th scope="col">5</th>
      <th scope="col">6</th>
      <th scope="col">7</th>
      <th scope="col">8</th>
      <th scope="col">9</th>
      <th scope="col">10</th>
      <th scope="col">11</th>
      <th scope="col">12</th>
    </tr>
     <?php for($i=1;$i<=12;$i++){ ?>
         <tr>
         <?php for($j=1;$j<=12;$j++){ ?>
              <td> <?php for($i=1;$i<=12;$i++){ 
                     $m=$j*$i;
                     echo "$j*$i=$m <br>";
                }?>
              </td>
                  <?php } ?>
         </tr>
         <?php } ?>
     </tbody>
 </table>

 <script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>    
</body>
</html>