<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABAJO</title>
</head>
<body>
     <?php
     echo '<h3>';
     //todo el contenido
     for ($i = 0; $i <=99; $i++){
        if($i <= 9){
            echo "0".$i. ", ";
     }
       if ($i > 9 && $i <99){
           echo $i. ", ";
       }
         
       }

       echo "99";
       echo '</h3>'
     ?>
</body>
</html>