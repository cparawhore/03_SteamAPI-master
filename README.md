SteamAPI
========

SteamAPI is a PHP wrapper for interacting with Valve's Steam Community.

SteamAPI offers the ability to:

 * pull entire player profiles, including most played games, Steam Ratings, and groups subscribed to;
 * get achievements and statistics schema for specific games (Steam apikey and json PHP extension required);
 * track user achievements

Hopefully over time, more functionality can be added to this API, including pulling global game statistics, group interaction if there's time!


Overview
--------

It's simple to integrate SteamAPI into your web application!

To access user profiles, create a SteamUser object for the target user:

    <?php

    require("steam/SteamUser.php");

    $user = new SteamUser($id);
    print_r($user); //Or whatever you want to do with it! :)

    ?>


More Information
----------------
* Looking for [API Documentation](/MattRyder/steamAPI/wiki/API-Documentation)?
* Some [examples of usage](/MattRyder/steamAPI/wiki/Examples)?
