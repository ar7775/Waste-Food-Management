<?php

$address=; //store address as a string with spaces, no special characters, no commas here

function getCoordinates($address){

$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign

$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";

$response = file_get_contents($url);

$json = json_decode($response,TRUE); //generate array object from the response

$lat = $json['results'][0]['geometry']['location']['lat']; //get latitude from JSON response

$long = $json['results'][0]['geometry']['location']['lng']; //get longitude from JSON response

//query to insert tuple into supplier and consumer uses above two variables

}
?>
