<?php 
function rpsls($player1, $player2){
$values = [
"rock" => ["lizard", "scissors"],
"paper" => ["rock", "spock"],
"scissors" => ["paper", "lizard"],
"spock" => ["scissors", "rock"],
"lizard" => ["spock", "paper"]
];


if (!array_key_exists($player1, $values) || !array_key_exists($player2, $values)){
return "Incorrect answer";
};

// se nell array con la chiave del giocatore 1 ce la scelta del giocatore 2
if (in_array($player2, $values[$player1])){

//vince giocatore 1
return "Player 1 Won!";

}
// se nell array con la chiave del giocatore 2 ce la scelta del giocatore 1
elseif (in_array($player1, $values[$player2])) {

//vince giocatore 2
return "Player 2 Won!";
}

//altrimenti è un pareggio
return "Draw!";

}

echo rpsls("lizard", "rock");