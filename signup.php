<?php
include('config.php');
session_start();
 
if($_POST['accountforsignup']=="supplier") {

	
	include('config.php');
	//session_start();
	
	/*$names="sheetal";
	
	$pwds="sheetal";
	$contacts=981919283;
	$addrs="prabhadevi mumbai";
	$emails="sheetal";
	
	*/
	
	
	$names=$_POST['names'];
	
	$pwds=$_POST['pwds'];
	$contacts=$_POST['contacts'];
	$addrs=$_POST['addrs'];
	$emails=$_POST['emails'];
	

	$address = str_replace(" ", "+", $addrs); // replace all the white space with "+" sign

	$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
	$response = file_get_contents($url);
	$json = json_decode($response,TRUE); //generate array object from the response
	$lat = $json['results'][0]['geometry']['location']['lat']; //get latitude from JSON response
	$long = $json['results'][0]['geometry']['location']['lng']; //get longitude from JSON response


	//query to insert tuple into supplier and consumer uses above two variables
	$sql = "Insert into supplier (names, pwds, contacts, addrs, latitudes, longitudes, emails) VALUES ('$names','$pwds', $contacts, '$addrs', $lat, $long, '$emails')";
    $conn->query($sql); 
	
}
else {
	
	
	include('config.php');
	//session_start();
	
	/*
	$names="sheetal";
	
	$pwds="sheetal";
	$contacts=981919283;
	$addrs="prabhadevi mumbai";
	$emails="sheetal";
	*/
	
	$names=$_POST['names'];
	
	$pwds=$_POST['pwds'];
	$contacts=$_POST['contacts'];
	$addrs=$_POST['addrs'];
	$emails=$_POST['emails'];
	
	$address = str_replace(" ", "+", $addrs); // replace all the white space with "+" sign

	$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
	$response = file_get_contents($url);
	$json = json_decode($response,TRUE); //generate array object from the response
	$lat = $json['results'][0]['geometry']['location']['lat']; //get latitude from JSON response
	$long = $json['results'][0]['geometry']['location']['lng']; //get longitude from JSON response


	//query to insert tuple into supplier and consumer uses above two variables
	
	$sql = "Insert into consumer (namec, pwdc, contactc, addrc, latitudec, longitudec, emailc) VALUES ('$names','$pwds', $contacts, '$addrs', $lat, $long, '$emails')";
    $conn->query($sql); 
	
	
}
	

?>
