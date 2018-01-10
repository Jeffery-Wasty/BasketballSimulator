<?php session_start(); ?>
<?php
    extract($_POST);
    echo "<html lang='en'> 
    <head> 
        <title>Basketball Simulator</title> 
        <meta charset='utf-8'>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='./style/stylesheet.css' rel='stylesheet'>
    </head>
    <body>    
        <div class='jumbotron text-center'>
            <h2>Run Simulation</h2>
        </div>
        <div>
            <table class='table table-hover table-responsive text-center'>
                <tr>
                    <td>Player</td>
                    <td>Points</td>
                    <td>Rebounds</td>
                    <td>Assists</td>
                    <td>Blocks</td>
                    <td>Steals</td>
                    <td>FGA</td>
                    <td>FGM</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player1Name"] . "</td>
                    <td>" . $player1Points . "</td>
                    <td>" . $player1Rebounds . "</td>
                    <td>" . $player1Assists . "</td>
                    <td>" . $player1Blocks . "</td>
                    <td>" . $player1Steals . "</td>
                    <td>" . $player1FGA . "</td>
                    <td>" . $player1FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player2Name"] . "</td>
                    <td>" . $player2Points . "</td>
                    <td>" . $player2Rebounds . "</td>
                    <td>" . $player2Assists . "</td>
                    <td>" . $player2Blocks . "</td>
                    <td>" . $player2Steals . "</td>
                    <td>" . $player2FGA . "</td>
                    <td>" . $player2FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player3Name"] . "</td>
                    <td>" . $player3Points . "</td>
                    <td>" . $player3Rebounds . "</td>
                    <td>" . $player3Assists . "</td>
                    <td>" . $player3Blocks . "</td>
                    <td>" . $player3Steals . "</td>
                    <td>" . $player3FGA . "</td>
                    <td>" . $player3FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player4Name"] . "</td>
                    <td>" . $player4Points . "</td>
                    <td>" . $player4Rebounds . "</td>
                    <td>" . $player4Assists . "</td>
                    <td>" . $player4Blocks . "</td>
                    <td>" . $player4Steals . "</td>
                    <td>" . $player4FGA . "</td>
                    <td>" . $player4FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player5Name"] . "</td>
                    <td>" . $player5Points . "</td>
                    <td>" . $player5Rebounds . "</td>
                    <td>" . $player5Assists . "</td>
                    <td>" . $player5Blocks . "</td>
                    <td>" . $player5Steals . "</td>
                    <td>" . $player5FGA . "</td>
                    <td>" . $player5FGM . "</td>
                </tr>
            </table>
        </div>
        <br />
        <br />
            <table class='table table-hover table-responsive text-center' id='score-table'>
                <tr>
                    <td>Quarter</td>
                    <td>Time Remaining</td>
                    <td>Home Score</td>
                    <td>Away Score</td>
                </tr>
                <tr>
                    <td>" . $quarter . "</td>
                    <td>" . $timeRemaining . "</td>
                    <td>" . $homeScore . "</td>
                    <td>" . $awayScore . "</td>
                </tr>
            <table>
        <br />
        <br />
        <div>
            <table class='table table-hover table-responsive text-center'>
                <tr>
                    <td>Player</td>
                    <td>Points</td>
                    <td>Rebounds</td>
                    <td>Assists</td>
                    <td>Blocks</td>
                    <td>Steals</td>
                    <td>FGA</td>
                    <td>FGM</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player1Name"] . "</td>
                    <td>" . $player1Points . "</td>
                    <td>" . $player1Rebounds . "</td>
                    <td>" . $player1Assists . "</td>
                    <td>" . $player1Blocks . "</td>
                    <td>" . $player1Steals . "</td>
                    <td>" . $player1FGA . "</td>
                    <td>" . $player1FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player2Name"] . "</td>
                    <td>" . $player2Points . "</td>
                    <td>" . $player2Rebounds . "</td>
                    <td>" . $player2Assists . "</td>
                    <td>" . $player2Blocks . "</td>
                    <td>" . $player2Steals . "</td>
                    <td>" . $player2FGA . "</td>
                    <td>" . $player2FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player3Name"] . "</td>
                    <td>" . $player3Points . "</td>
                    <td>" . $player3Rebounds . "</td>
                    <td>" . $player3Assists . "</td>
                    <td>" . $player3Blocks . "</td>
                    <td>" . $player3Steals . "</td>
                    <td>" . $player3FGA . "</td>
                    <td>" . $player3FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player4Name"] . "</td>
                    <td>" . $player4Points . "</td>
                    <td>" . $player4Rebounds . "</td>
                    <td>" . $player4Assists . "</td>
                    <td>" . $player4Blocks . "</td>
                    <td>" . $player4Steals . "</td>
                    <td>" . $player4FGA . "</td>
                    <td>" . $player4FGM . "</td>
                </tr>
                <tr>
                    <td>" . $_COOKIE["player5Name"] . "</td>
                    <td>" . $player5Points . "</td>
                    <td>" . $player5Rebounds . "</td>
                    <td>" . $player5Assists . "</td>
                    <td>" . $player5Blocks . "</td>
                    <td>" . $player5Steals . "</td>
                    <td>" . $player5FGA . "</td>
                    <td>" . $player5FGM . "</td>
                </tr>
            </table>
        </div> 
    </body>"
?>