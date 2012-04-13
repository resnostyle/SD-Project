<?php
//if ( $REQUEST_URL == $URL_OF_CURRENT_PAGE ) die ("Direct access not premitted");

/*
 * @package Facebook Call
 * @author Bryan Pearson <bp at bryanwp>
 * @copyright Apr 3, 2012
*/


//quick function to get the latest facebook status

//enter your access token here
$myFBToken="f873cd187ab1e78a2dfab5445b9d8d34";
//must be https when using an access token
$url="https://graph.facebook.com/".$fbID."/feed?access_token=".$myFBToken."&limit=1";
$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
//don't verify SSL (required for some servers)
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
$page = json_decode(curl_exec($c));
curl_close($ch);







/* End of file facebook.php */
