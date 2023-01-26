<?php

$catipal = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

asort($catipal);
foreach ($catipal as $key => $val) {
    echo "La capitale di " .$key. " è " .$val. "<br>";
}
echo "<hr>";

ksort($catipal);
foreach ($catipal as $key => $val) {
    echo "La capitale di " .$key. " è " .$val. "<br>";
}


/* order by state e capital 

ciclo :
La capitale di Netherlands è Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin

2° ciclo
La capitale Beligio è Brussels.

*/