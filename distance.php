<?php

//query to retrieve consumer details

$latdeg=; //enter consumer latitude in degrees
$longdeg=; //enter consumer longitude in
$latrad=deg2rad($latdeg);
$longrad=deg2rad($longdeg);
$distkm=;  //enter distance here

//since angle of displacement is taken as 90deg and 1 deg is 111111 km
$horzdisp= (distkm/cos($latrad))/111111; //horizontal displacement
$vertdisp= (distkm)/111111; //vertical displacement

$horzupperlim= $latdeg+$horzdisp;
$vertupperlim= $longdeg+vertdisp;

$horzlowlim= $latdeg-$horzdisp;
$vertlowlim= $longdeg-vertdisp;

//retrieval queries to retrieve everything within limits





?>
