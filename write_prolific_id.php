<?php

// get the data from the POST message
$post_data = json_decode(file_get_contents('php://input'), true);
$data = $post_data['filedata'];

$sub_id = '/dartfs-hpc/rc/home/z/f0053cz/public_html/chase_mimic_study_socialRandom/server_data/participant_id.txt';
$last_id = file_get_contents($sub_id); //GETS THE LAST SUBJECT ID
if ($last_id === FALSE) {
    $name = "data_loading_page/participant-1-id.csv"; 
  } else {
    $name = "data_loading_page/participant-{$last_id}-id.csv"; 
  }

// generate a unique ID for the file, e.g., session-6feu833950202 
//$file = uniqid("sub-"); 
// the directory "data" must be writable by the server
//$name = "data/participanr{$file}.csv"; 
//$name = "data/{$file}.csv"; 
// write the file to disk
file_put_contents($name, $data);
?>