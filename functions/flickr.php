<?php
/*
 * @package Flickr Call
 * @author Bryan Pearson <bp at bryanwp>
 * @copyright Apr 3, 2012
 */

$flickr_method = "flickr.people.getPublicPhotos";
$return_format = "php_serial";
$apikey = "a374e28362904949107a691d94332f19";
$userid = "7224150@N06";

//start a curl instance
$ch = curl_init();

// set URL
curl_setopt($ch, CURLOPT_URL, "http://www.flickr.com/services/rest/?method=$flickr_method&user_id=$userid&format=$return_format&api_key=$apikey");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// grab URL and pass it to the browser
$curl_serialized = curl_exec($ch);

//gather error checking
$info = curl_getinfo($ch);

// close cURL resource
curl_close($ch);

//unserialize output from flickr
$curl_unserialized = unserialize($curl_serialized);

//checking stat from flickr
if ($curl_unserialized['stat'] != 'ok')
{
    echo 'Flickr has returned a bad status.';
    //@todo log this info for further analysis, likely being rate limited, cache queries?
    die();
}

for ($i = 1; $i < 7; $i++)
{
    //output image url
    //@todo abstract the url in a better way, this is messy
    echo "<img height='50px' src='http://farm".$curl_unserialized['photos']['photo'][$i]['farm'].".static.flickr.com/"
            .$curl_unserialized['photos']['photo'][$i]['server'].'/'.$curl_unserialized['photos']['photo'][$i]['id'].
            '_'.$curl_unserialized['photos']['photo'][$i]['secret'].".jpg"."'/>";
}

/* End of file flickr.php */
