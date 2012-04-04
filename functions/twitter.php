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

var_dump($curl_page);



//print $curl_page->{'text'};
/* End of file twitter.php */
