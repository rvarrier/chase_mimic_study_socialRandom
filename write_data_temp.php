<?php

// get the data from the POST message
$post_data = json_decode(file_get_contents('php://input'), true);
$data = $post_data['filedata'];

//$sub_id = '/dartfs-hpc/rc/home/z/f0053cz/public_html/chase_mimic_study_v2/server_data/participant_id.txt';
//$last_id = file_get_contents($sub_id); //GETS THE LAST SUBJECT ID
//$name = "data_csv_temp/participant-{$last_id}-temp.csv"; 
// generate a unique ID for the file, e.g., session-6feu833950202 
$file = uniqid("sub-"); 
// the directory "data" must be writable by the server
$name = "data_csv_temp/participant-{$file}.csv"; 
//$name = "data/{$file}.csv"; 
// write the file to disk
file_put_contents($name, $data);

//$file = uniqid("sub-"); 
// the directory "data" must be writable by the server
//$name1 = "data_csv_temp2/{$file}.csv"; 
//file_put_contents($name1, $data);

?>