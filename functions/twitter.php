<?php
/*
 * @package Twitter Call
 * @author Bryan Pearson <bp at bryanwp>
 * @copyright Apr 3, 2012
*/

$search_method = 'json';
$search_term = '%23savingssummit';
$results_requested = '2';
$result_type = 'recent';

//start a curl instance
$ch = curl_init();

// set URL
curl_setopt($ch, CURLOPT_URL, "http://search.twitter.com/search.$search_method?q=$search_term&rpp=$results_requested&include_entities=false&result_type=$result_type");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// grab URL and pass it to the browser
$curl_page = curl_exec($ch);
$curl_page = json_decode($curl_page,true);
// close cURL resource
curl_close($ch);

function twitter_time($a)
{
    //get current timestampt
    $b = strtotime("now");
    //get timestamp when tweet created
    $c = strtotime($a);
    //get difference
    $d = $b - $c;
    //calculate different time values
    $minute = 60;
    $hour = $minute * 60;
    $day = $hour * 24;
    $week = $day * 7;

    if(is_numeric($d) && $d > 0)
    {
        //if less then 3 seconds
        if($d < 3) return "right now";
        //if less then minute
        if($d < $minute) return floor($d) . " seconds ago";
        //if less then 2 minutes
        if($d < $minute * 2) return "about 1 minute ago";
        //if less then hour
        if($d < $hour) return floor($d / $minute) . " minutes ago";
        //if less then 2 hours
        if($d < $hour * 2) return "about 1 hour ago";
        //if less then day
        if($d < $day) return floor($d / $hour) . " hours ago";
        //if more then day, but less then 2 days
        if($d > $day && $d < $day * 2) return "yesterday";
        //if less then year
        if($d < $day * 365) return floor($d / $day) . " days ago";
        //else return more than a year
        return "over a year ago";
    }
}


/* End of file twitter.php */
