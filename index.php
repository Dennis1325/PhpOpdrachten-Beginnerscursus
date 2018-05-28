<?php
// VARIABELEN WEERGEVEN
//$aantal = 14;
//$deze_jongen = "Deze jongen is ";
//
//echo $deze_jongen.$aantal." jaar oud!";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Php Opdrachten</title>
</head>
<style>
    /*body{*/
        /*text-align: center;*/
    /*}*/
    .rood{
        border: red solid 5px;
    }
    .groen{
        border: green solid 5px;
    }
    table, td{
        padding: 10px;
        border: solid black 1px;
    }
    .swimPic{
        padding-right: 5px;
        padding-left: 5px;
    }

</style>
<body>
<?php

// AAP FOR LOOP
//for ($i = 1; $i < 6; $i++){
//    echo "<img".$class." src='Img/apen/aap".$i.".jpg'>";
//}

// CONDITIES
//for ($i = 1; $i < 9; $i++){
//    if ($i % 2 == 0){
//        $class = "class='rood'";
//    }
//    else{
//        $class = "class='groen'";
//    }
//    echo "<img ".$class."src='Img/apen/aap".$i.".jpg'>";
//}

// FOREACH BOMEN
//$bomen = array("img_0050.jpg","lillypilly1.jpg","Maranchery_Biyyam_Kayal_kandal.jpg");
//
//foreach($bomen as $boom){
//    echo "<img src='Img/bomen/".$boom."'>";
//}

// KERSTBOOM LOOP
//for($i = 0; $i <= 50; $i++){
//    for ($j = 0; $j < $i; $j++){
//        echo "*";
//    }
//    echo "*<br>";
//}


// BUSREIS OPDRACHT
//$leeftijd = 50;
//$bedrag = 10;
//if ($leeftijd > 65 || $leeftijd <= 12){
//    $bedrag = $bedrag * 0.5;
//}
//if ($leeftijd < 3){
//    $bedrag = 0;
//}
//echo $bedrag;

// ZWEMCLUBS
//$zwemclubs["De spartelkuikens"] = 25;
//$zwemclubs["De waterbuffels"] = 32;
//$zwemclubs["Plonsmderin"] = 11;
//$zwemclubs["Bommetje"] = 23;
//
//foreach ($zwemclubs as $zwemclub => $leden){
//    echo
//        "<tr>"."<td>$zwemclub</td> "."<td>$leden</td>"."</tr>";
//    for ($pic = 1; $pic <= $leden/5; $pic++){
//        echo "<img class='swimPic' src='Img/Zwemplaatje.png'>";
//    }
//    echo "<br>";
//
//}

// Afspraak kapperzaak
//print("De volgende momenten zijn nog beschikbaar:<ul>");
//foreach($kappersagenda as $afspraak => $tijd) {
//    if($afspraak == "") {
//        print("<li>".$tijd."</li>") ;
//    }
//}




?>

</body>
</html>