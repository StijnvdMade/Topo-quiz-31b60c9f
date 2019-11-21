<?php
$punten = 0;
$toets = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"Washington", "India"=>"New Delhi", "Zuid Korea"=>"Seoul", "China"=>"Peking", "Nigeria"=>"Abuja", "Argentina"=>"Buenos Aires", "Egypt"=>"Cairo", "UK"=>"London");
echo("Dit is de Topo quiz. \n");
echo("Er wordt in deze quiz een land genoemd en dan moet je de hoofdstad invullen. \n");
foreach ($toets as $vraag => $key){
    echo("Wat is de hoofdstad van " . $vraag . "? \n");
    $antwoord = readline();
    if ($antwoord == $key){
        echo("Goed! \n");
        $punten++; 
    }
    else {
        echo("Fout, het goede antwoord is: " . $key . PHP_EOL);
    }
}
if ($punten > 1) {
    echo("Je hebt " . $punten . " van de 10 goed!");
}
else {
    echo("je bent wel heel slecht, je hebt 0 vragen goed.");
}
?>