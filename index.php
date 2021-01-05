<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri 
array i quali rappresentano delle partite di 
basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di 
casa e una squadra ospite, punti fatti dalla 
squadra di casa e punti fatti dalla squadra 
ospite. Stampiamo a schermo tutte le partite
 con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<h1>PHP SNACK 1</h1>
<?php

$matches = [
    [
        "home_team" => "UNAHOTELS Reggio Emilia",
        "home_team_score" => 68,
        "away_team" =>"Acqua S.Bernardo Cantù ",
        "away_team_score" => 78
    ],
    [
        "home_team" => "Banco di Sardegna Sassari",
        "home_team_score" => 100,
        "away_team" =>"Germani Brescia ",
        "away_team_score" => 87
    ],
    [
        "home_team" => "Carpegna Prosciutto Pesaro",
        "home_team_score" => 84,
        "away_team" =>"Allianz Pallacanestro Trieste",
        "away_team_score" => 74
    ],
    [
        "home_team" => "Openjobmetis Varese",
        "home_team_score" => 79,
        "away_team" =>"De' Longhi Treviso Basket",
        "away_team_score" => 80
    ],
    [
        "home_team" => "Virtus Segafredo Bologna",
        "home_team_score" => 68,
        "away_team" =>"A|X Armani Exchange Milano",
        "away_team_score" => 73
    ],
    [
        "home_team" => "Fortitudo Lavoropiù Bologna",
        "home_team_score" => 76,
        "away_team" =>"Umana Reyer Venezia",
        "away_team_score" => 72
    ],
     [
        "home_team" => "Vanoli Basket Cremona",
        "home_team_score" => 96,
        "away_team" =>"Happy Casa Brindisi",
        "away_team_score" => 94
    ],

];


?>

<h1> RISULTATI  13° GIORNATA  DI ANDATA LBA SERIE A</h1>
<ul>

<?php 
    for($i = 0; $i < count($matches); $i++) {
        ?>
        <li>
             <?= $matches[$i]['home_team']; ?> - 
             <?= $matches[$i]['away_team']; ?> |  
             <?= $matches[$i]['home_team_score']; ?> - 
             <?= $matches[$i]['away_team_score']; ?> 
        
        </li>
<?php
     }
?>
</ul>

<!-- PHP Snack 2:
Passare come parametri GET name, mail e age everificare
 (cercando i metodi che non conosciamo nella documentazione)
che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti 
“Accesso negato” -->

<h1>PHP JSNACK 2</h1>

<?php 

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];



if( 
    strlen($name) < 3 ||
    !is_numeric(stripos($email, ".")) ||
    !is_numeric(stripos($email, "@")) || 
    !is_numeric($age) 
   ){
    echo '<h1> Accesso negato. </h1>';
} else{
    echo '<h1> Accesso riuscito. </h1>';
};




?>