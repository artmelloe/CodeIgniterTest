<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
* Rename the image
*
* @param Array $file [file's name]
*
**/

function newFileName($file){
	$get_file = explode('.', $file);
    $new_file = time().'.'.$get_file[1];
	return $new_file;
}

/**
*
* Returns the date of the DB
*
* @param String $date [date's product]
*
**/

function dbToDate($date){
	$dateExplode = explode(" ",$date);
	$dateExplode = explode("-",$dateExplode[0]);
	return $dateExplode[2].'/'.$dateExplode[1].'/'.$dateExplode[0];
}