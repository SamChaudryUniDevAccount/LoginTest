<?php
/**
 * Created by PhpStorm.
 * User: SamChaudry
 * Date: 28/02/2017
 * Time: 19:57
 */

session_start();

$accessLevel = $_COOKIE['access_level_cookie'];
;

displayAccessLevelInformation($accessLevel);

function displayAccessLevelInformation($accessLevel) {

 if ($accessLevel == "standard" ) {


     echo"<p>Welcome you have standard level access</p>";


 }
 elseif ($accessLevel == "root") {

    echo"<p>You have admin level privliedges</p>";
}

}

