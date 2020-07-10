<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>


    <?php

 echo '<div class="carte"> <img src="./carte-hauts-de-france.jpg">';


echo'<a class="link" href="index.php?saisons=summer">  summer  </a> ';
echo'<a  class="link" href="index.php?saisons=automn">  automn  </a> ';
echo'<a  class="link" href="index.php?saisons=winter">  winter  </a> ';
echo'<a class="link" href="index.php?saisons=spring">  spring  </a> ';

$summer =["30°c","21°c","34°c","26°c","33°c","32°c","31°c","30°c","36°c","35°c"];
$automn =["23°c","21°c","21°c","22°c","21°c","20°c","20°c","24°c","23°c","21°c"];
$winter =["5°c","4°c","3°c","2°c","2°c","1°c","-1°c","-2°c","-3°c","-2°c"];
$spring =["10°c","12°c","14°c","12°c","15°c","16°c","16°c","17°c","12°c","10°c"];
$i = 1;


if(isset($_GET["saisons"])){

    if($_GET["saisons"] == "summer"){
  echo  '<a href="index.php" class="accueil"> Accueil </a>';

        foreach($summer as $temp1){
            
            echo '<div class="pos-' .$i .'" >' . $temp1 . '</div>';
        
        $i++;
        
        }
    }

    elseif($_GET["saisons"]== "automn"){
        echo  '<a href="index.php" class="accueil"> Accueil </a>';
        foreach($automn as $temp2){
            echo '<div class="pos-' .$i .'" >' . $temp2. '</div>';
        $i++;
        
        }
    }

    elseif($_GET["saisons"]== "winter"){
        echo  '<a href="index.php" class="accueil"> Accueil</a>';
        foreach($winter as $temp3){
            echo '<div class="pos-' .$i .'" >' . $temp3. '</div>';
        $i++;
        
        }
    }

    elseif($_GET["saisons"] == "spring"){
        echo  '<a href="index.php" class="accueil"> Accueil</a>';
        foreach($spring as $temp4){
            echo '<div class="pos-' .$i .'" >' . $temp4. '</div>';
        $i++;
        
        }
    }

} else{
    foreach($spring as $temp4){
        echo '<div class="pos-' .$i .'" > X </div>';
    $i++;
    }
}


?>
</body>

</html>