<?php
    extract($_POST);
    
    if (isset($_COOKIE["player1Name"])) {
        $player1Name = $_COOKIE["player1Name"];
    }
    else {
        setcookie("player1Name", $player1Name, time() + (86400 * 30));
    }
    if (isset($_COOKIE["player1PossessionStat"])) {
        $player1PossessionStat = $_COOKIE["player1PossessionStat"];
    }
    else {
        setcookie("player1PossessionStat", ($_COOKIE["player1ShootingStat"] * (2/3) + $_COOKIE["player1AssistStat"] * (1/3)), time() + (86400 * 30));
        $player1PossessionStat = ($_COOKIE["player1ShootingStat"] * (2/3) + $_COOKIE["player1AssistStat"] * (1/3));
    }
    if (isset($_COOKIE["player2Name"])) {
            $player2Name = $_COOKIE["player2Name"];
        }
        else {
            setcookie("player2Name", $player2Name, time() + (86400 * 30));
        }
    if (isset($_COOKIE["player2PossessionStat"])) {
        $player2PossessionStat = $_COOKIE["player2PossessionStat"];
    }
    else {
        setcookie("player2PossessionStat", ($_COOKIE["player2ShootingStat"] * (2/3) + $_COOKIE["player2AssistStat"] * (1/3)), time() + (86400 * 30));
        $player2PossessionStat = ($_COOKIE["player2ShootingStat"] * (2/3) + $_COOKIE["player2AssistStat"] * (1/3));
    }
    if (isset($_COOKIE["player3Name"])) {
            $player3Name = $_COOKIE["player3Name"];
        }
        else {
            setcookie("player3Name", $player3Name, time() + (86400 * 30));
        }
    if (isset($_COOKIE["player3PossessionStat"])) {
        $player3PossessionStat = $_COOKIE["player3PossessionStat"];
    }
    else {
        setcookie("player3PossessionStat", ($_COOKIE["player3ShootingStat"] * (2/3) + $_COOKIE["player3AssistStat"] * (1/3)), time() + (86400 * 30));
        $player3PossessionStat = ($_COOKIE["player3ShootingStat"] * (2/3) + $_COOKIE["player3AssistStat"] * (1/3));
    }
    if (isset($_COOKIE["player4Name"])) {
            $player4Name = $_COOKIE["player4Name"];
        }
        else {
            setcookie("player4Name", $player4Name, time() + (86400 * 30));
        }
    if (isset($_COOKIE["player4PossessionStat"])) {
        $player4PossessionStat = $_COOKIE["player4PossessionStat"];
    }
    else {
        setcookie("player4PossessionStat", ($_COOKIE["player4ShootingStat"] * (2/3) + $_COOKIE["player4AssistStat"] * (1/3)), time() + (86400 * 30));
        $player4PossessionStat = ($_COOKIE["player4ShootingStat"] * (2/3) + $_COOKIE["player4AssistStat"] * (1/3));
    }
    if (isset($_COOKIE["player5Name"])) {
            $player5Name = $_COOKIE["player5Name"];
        }
        else {
            setcookie("player5Name", $player5Name, time() + (86400 * 30));
        }
    if (isset($_COOKIE["player5PossessionStat"])) {
        $player5PossessionStat = $_COOKIE["player5PossessionStat"];
    }
    else {
        setcookie("player5PossessionStat", ($_COOKIE["player5ShootingStat"] * (2/3) + $_COOKIE["player5AssistStat"] * (1/3)), time() + (86400 * 30));
        $player5PossessionStat = ($_COOKIE["player5ShootingStat"] * (2/3) + $_COOKIE["player5AssistStat"] * (1/3));
    }
    echo "<html lang='en'> 
    <head> 
        <title>Basketball Simulator</title> 
        <meta charset='utf-8'>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
        <link href='./style/stylesheet.css' rel='stylesheet'>
    </head>
    <body>    
        <div class='jumbotron text-center'>
            <h2>Player Information</h2>
        </div>
        <div>
            <table class='table table-hover table-responsive text-center'>
                <tr>
                    <td>Player</td>
                    <td>Shooting Stat</td>
                    <td>Rebound Stat</td>
                    <td>Assist Stat</td>
                    <td>Block Stat</td>
                    <td>Steal Stat</td>
                    <td>Possession Use</td>
                </tr>
                <tr>
                    <td>" . $player1Name . "</td>
                    <td>" . $_COOKIE["player1ShootingStat"] . "</td>
                    <td>" . $_COOKIE["player1ReboundStat"] . "</td>
                    <td>" . $_COOKIE["player1AssistStat"] . "</td>
                    <td>" . $_COOKIE["player1BlockStat"] . "</td>
                    <td>" . $_COOKIE["player1StealStat"] . "</td>
                    <td>" . $player1PossessionStat . "</td>
                </tr>
                <tr>
                    <td>" . $player2Name . "</td>
                    <td>" . $_COOKIE["player2ShootingStat"] . "</td>
                    <td>" . $_COOKIE["player2ReboundStat"] . "</td>
                    <td>" . $_COOKIE["player2AssistStat"] . "</td>
                    <td>" . $_COOKIE["player2BlockStat"] . "</td>
                    <td>" . $_COOKIE["player2StealStat"] . "</td>
                    <td>" . $player2PossessionStat . "</td>
                </tr>
                <tr>
                    <td>" . $player3Name . "</td>
                    <td>" . $_COOKIE["player3ShootingStat"] . "</td>
                    <td>" . $_COOKIE["player3ReboundStat"] . "</td>
                    <td>" . $_COOKIE["player3AssistStat"] . "</td>
                    <td>" . $_COOKIE["player3BlockStat"] . "</td>
                    <td>" . $_COOKIE["player3StealStat"] . "</td>
                    <td>" . $player3PossessionStat . "</td>
                </tr>
                <tr>
                    <td>" . $player4Name . "</td>
                    <td>" . $_COOKIE["player4ShootingStat"] . "</td>
                    <td>" . $_COOKIE["player4ReboundStat"] . "</td>
                    <td>" . $_COOKIE["player4AssistStat"] . "</td>
                    <td>" . $_COOKIE["player4BlockStat"] . "</td>
                    <td>" . $_COOKIE["player4StealStat"] . "</td>
                    <td>" . $player4PossessionStat . "</td>
                </tr>
                <tr>
                    <td>" . $player5Name . "</td>
                    <td>" . $_COOKIE["player5ShootingStat"] . "</td>
                    <td>" . $_COOKIE["player5ReboundStat"] . "</td>
                    <td>" . $_COOKIE["player5AssistStat"] . "</td>
                    <td>" . $_COOKIE["player5BlockStat"] . "</td>
                    <td>" . $_COOKIE["player5StealStat"] . "</td>
                    <td>" . $player5PossessionStat . "</td>
                </tr>
            </table>
        </div>
        <div class='col-sm-offset-2 col-sm-10'>
          <a href='index.php'><button type='submit' class='btn btn-default'>Submit</button></a>
        </div>
        <div class='col-sm-offset-2 col-sm-10'>
          <a href='clearroster.php'><button type='submit' class='btn btn-default'>Clear Roster</button></a>
        </div>
    </body>"
?>