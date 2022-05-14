<?php

// get the data from the POST message
$post_data = json_decode(file_get_contents('php://input'), true);
$data = $post_data['filedata'];

// generate a unique ID for the file, e.g., session-6feu833950202 
$file = uniqid("sub-"); 
// the directory "data" must be writable by the server
$name = "new_data/participant-{$file}.csv"; 
//$name = "data/{$file}.csv"; 
// write the file to disk
file_put_contents($name, $data);
?>