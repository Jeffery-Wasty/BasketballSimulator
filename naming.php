<?php
    $player1Determiner = rand(0,3);
    $player2Determiner = rand(0,3);
    $player3Determiner = rand(0,3);
    $player4Determiner = rand(0,3);
    $player5Determiner = rand(0,3);
    setcookie("player1ShootingStat", (rand(1,25) + $player1Determiner*25), time() + (86400 * 30));
    setcookie("player1ReboundStat", (rand(1,25) + (3 - $player1Determiner)*25), time() + (86400 * 30));
    setcookie("player1AssistStat", (rand(1,25) + $player1Determiner*25), time() + (86400 * 30));
    setcookie("player1BlockStat", (rand(1,25) + (3 - $player1Determiner)*25), time() + (86400 * 30));
    setcookie("player1StealStat", (rand(1,25) + $player1Determiner*25), time() + (86400 * 30));
    setcookie("player2ShootingStat", (rand(1,25) + $player2Determiner*25), time() + (86400 * 30));
    setcookie("player2ReboundStat", (rand(1,25) + (3 - $player2Determiner)*25), time() + (86400 * 30));
    setcookie("player2AssistStat", (rand(1,25) + $player2Determiner*25), time() + (86400 * 30));
    setcookie("player2BlockStat", (rand(1,25) + (3 - $player2Determiner)*25), time() + (86400 * 30));
    setcookie("player2StealStat", (rand(1,25) + $player2Determiner*25), time() + (86400 * 30));
    setcookie("player3ShootingStat", (rand(1,25) + $player3Determiner*25), time() + (86400 * 30));
    setcookie("player3ReboundStat", (rand(1,25) + (3 - $player3Determiner)*25), time() + (86400 * 30));
    setcookie("player3AssistStat", (rand(1,25) + $player3Determiner*25), time() + (86400 * 30));
    setcookie("player3BlockStat", (rand(1,25) + (3 - $player3Determiner)*25), time() + (86400 * 30));
    setcookie("player3StealStat", (rand(1,25) + $player3Determiner*25), time() + (86400 * 30));
    setcookie("player4ShootingStat", (rand(1,25) + $player4Determiner*25), time() + (86400 * 30));
    setcookie("player4ReboundStat", (rand(1,25) + (3 - $player4Determiner)*25), time() + (86400 * 30));
    setcookie("player4AssistStat", (rand(1,25) + $player4Determiner*25), time() + (86400 * 30));
    setcookie("player4BlockStat", (rand(1,25) + (3 - $player4Determiner)*25), time() + (86400 * 30));
    setcookie("player4StealStat", (rand(1,25) + $player4Determiner*25), time() + (86400 * 30));
    setcookie("player5ShootingStat", (rand(1,25) + $player5Determiner*25), time() + (86400 * 30));
    setcookie("player5ReboundStat", (rand(1,25) + (3 - $player5Determiner)*25), time() + (86400 * 30));
    setcookie("player5AssistStat", (rand(1,25) + $player5Determiner*25), time() + (86400 * 30));
    setcookie("player5BlockStat", (rand(1,25) + (3 - $player5Determiner)*25), time() + (86400 * 30));
    setcookie("player5StealStat", (rand(1,25) + $player5Determiner*25), time() + (86400 * 30));   
?>
<html lang="en"> 
<head> 
    <title>Basketball Simulator</title> 
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="./style/stylesheet.css" rel="stylesheet">
</head>
<body>    
    <div class="jumbotron text-center">
        <h2>Enter Player Data</h2>
    </div>
    <form class="form-horizontal" action="players.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="player1Name">Player 1 Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="player1Name" placeholder="Enter the first player name.">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="player2Name">Player 2 Name:</label>
            <div class="col-sm-10"> 
              <input type="text" class="form-control" name="player2Name" placeholder="Enter the second player name.">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="player3Name">Player 3 Name:</label>
            <div class="col-sm-10"> 
              <input type="text" class="form-control" name="player3Name" placeholder="Enter the third player name.">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="player4Name">Player 4 Name:</label>
            <div class="col-sm-10"> 
              <input type="text" class="form-control" name="player4Name" placeholder="Enter the fourth player name.">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="player5Name">Player 5 Name:</label>
            <div class="col-sm-10"> 
              <input type="text" class="form-control" name="player5Name" placeholder="Enter the fifth player name.">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
        <input type="hidden" name="player1Points" value="0">
        <input type="hidden" name="player1Rebounds" value="0">
        <input type="hidden" name="player1Assists" value="0">
        <input type="hidden" name="player1Blocks" value="0">
        <input type="hidden" name="player1Steals" value="0">
        <input type="hidden" name="player1FGA" value="0">
        <input type="hidden" name="player1FGM" value="0">
        <input type="hidden" name="player2Points" value="0">
        <input type="hidden" name="player2Rebounds" value="0">
        <input type="hidden" name="player2Assists" value="0">
        <input type="hidden" name="player2Blocks" value="0">
        <input type="hidden" name="player2Steals" value="0">
        <input type="hidden" name="player2FGA" value="0">
        <input type="hidden" name="player2FGM" value="0">
        <input type="hidden" name="player3Points" value="0">
        <input type="hidden" name="player3Rebounds" value="0">
        <input type="hidden" name="player3Assists" value="0">
        <input type="hidden" name="player3Blocks" value="0">
        <input type="hidden" name="player3Steals" value="0">
        <input type="hidden" name="player3FGA" value="0">
        <input type="hidden" name="player3FGM" value="0">
        <input type="hidden" name="player4Points" value="0">
        <input type="hidden" name="player4Rebounds" value="0">
        <input type="hidden" name="player4Assists" value="0">
        <input type="hidden" name="player4Blocks" value="0">
        <input type="hidden" name="player4Steals" value="0">
        <input type="hidden" name="player4FGA" value="0">
        <input type="hidden" name="player4FGM" value="0">
        <input type="hidden" name="player5Points" value="0">
        <input type="hidden" name="player5Rebounds" value="0">
        <input type="hidden" name="player5Assists" value="0">
        <input type="hidden" name="player5Blocks" value="0">
        <input type="hidden" name="player5Steals" value="0">
        <input type="hidden" name="player5FGA" value="0">
        <input type="hidden" name="player5FGM" value="0">
    </form>
    </body>