<?php

require_once("./player.php");
require_once("./FieldLayout.php");

$player1 = new Player("Paul", "X");
$player2 = new Player("Peter", "O");

$board = new FieldLayout(array(array("","",""),array("","",""),array("","","")));

class TicTacToe{
    private $currentPlayer;

    public function __construct($Player){
        $this->currentPlayer = $Player;
    }

    private function switchPlayer(){
        //

    }

    public function move($player,$position){

        //Hier eine Funktion um die HTML zu "rendern"

    }

    public function currentStatus(){
        return $this->currentPlayer;
    }
}



$output = '<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Tic-Tac-Toe. This is the title. It is displayed in the titlebar of the window in most browsers.</title>
    <meta name="description" content="Tic-Tac-Toe-Game. Here is a short description for the page. This text is displayed e. g. in search engine result listings.">
    <style>
table.tic td {
    border: 1px solid #333; /* grey cell borders */
            width: 8rem;
            height: 8rem;
            vertical-align: middle;
            text-align: center;
            font-size: 4rem;
            font-family: Arial;
        }
        table { margin-bottom: 2rem; }
        input.field {
    border: 0;
    background-color: white;
            color: white; /* make the value invisible (white) */
            height: 8rem;
            width: 8rem !important;
            font-family: Arial;
            font-size: 4rem;
            font-weight: normal;
            cursor: pointer;
        }
        input.field:hover {
    border: 0;
    color: #c81657; /* red on hover */
}
        .colorX { color: #e77; } /* X is light red */
        .colorO { color: #77e; } /* O is light blue */
        table.tic { border-collapse: collapse; }
    </style>
</head>
<body>
    <section>
        <h1>Tic-Tac-Toe</h1>
        <article id="mainContent">
            <h2>Your free browsergame!</h2>
            <p>Type your game instructions here...</p>
            <form method="get" action="index.php">
                <table class="tic">
                    <tr>';

$table = '
                        <td><input type="submit" class="reset field" name="cell-0-0" value="X" /></td>
                        <td><input type="submit" class="reset field" name="cell-0-1" value="X" /></td>
                        <td><input type="submit" class="reset field" name="cell-0-2" value="X" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="reset field" name="cell-1-0" value="X" /></td>
                        <td><input type="submit" class="reset field" name="cell-1-1" value="X" /></td>
                        <td><input type="submit" class="reset field" name="cell-1-2" value="X" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="reset field" name="cell-2-0" value="X" /></td>
                        <td><input type="submit" class="reset field" name="cell-2-1" value="X" /></td>
                        <td><input type="submit" class="reset field" name="cell-2-2" value="X" /></td>';

$end = '
                    </tr>
                </table>
            </form>
        </article>
    </section>
</body>
</html>';


//Das hier ist eine Funktion um den neuen table zu generieren 
$startPut = "<tr>";
for ($i=0;$i<3;$i++){
    $currentP = Z;
    for ($z=0;$z<3;$z++){
        $startPut .= "<td><input type=\"submit\" class=\"reset field\" name=\"cell-$i-$z\" value=\"hallo\"";
    }
    $startPut .= "</tr>";
}

print_r($startPut);



$all;
$all .= $output;
$all .= $table;
$all .= $end;


for ($i=0;$i<3;$i++) {
    for ($z = 0; $z < 3; $z++) {
        if (isset($_GET["cell-".$i."-".$z.""])) {
            //symbol, position
            //Hier muss eine Funktion hin um ein Array an board->placeSymbol zu geben
            //print_r($_GET["cell-".$i."-".$z.""]);
            $board->placeSymbol($_GET["cell-".$i."-".$z.""], "cell-".$i."-".$z."");
            print_r($board->getBoard());
        }
    }
}



?>