<!DOCTYPE html>
<html>
<body>

<?php 
require_once("steam/SteamUserCS.php");
require_once("steam/SteamGame.php");
 ?>

<h1>Steam API Test </h1>

<?php

	//Handler for building this API from Terminal CLI:
	/*if(substr(php_sapi_name(), 0, 3) == "cli")
		$userID = $argv[1]; //Pull ID from CLI args
	else
		$userID = $_GET["id"]; // Pull it from the apache / CGI / whatever*/

	//Call the SteamUser constructor with either the 17-digit Steam Community ID
    //or their custom URL (i.e. robinwalker)
	//$user = new SteamUser($userID);

	$userID = '76561198085580328';
	//'38788FFEE44E5EA4B7B4ED778A3C11B6');
	$user = new SteamUser($userID,'38788FFEE44E5EA4B7B4ED778A3C11B6');
if($user != NULL) {
    $fl = $user->getFriendsList(); //Pull the friends from the Steam API

    for($i = 0; $i < count($fl); $i++) {
        //echo each friends Steam ID
        echo "Friend Steam ID: {$fl[$i]->steamid}", PHP_EOL;
    }
}



?>


</body>
</html>
