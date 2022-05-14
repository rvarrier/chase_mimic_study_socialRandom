<?php
header('Access-Control-Allow-Origin: *');

// NOTE PARTICIPANT.TXT IS JUST AN .TXT FILE WITH A NUMBER IN IT
// reference: https://softdev.ppls.ed.ac.uk/online_experiments/07_ppt.html

$id_filename = '/dartfs-hpc/rc/home/z/f0053cz/public_html/chase_mimic_study_v2/server_data/participant_id.txt';
$destination = 'expt_file.html?participant=';

$last_id = file_get_contents($id_filename); //GETS THE LAST SUBJECT ID

if ($last_id === FALSE) {
  $id = 0;
} else {
  $id = (int)$last_id;
}
$id += 1; //UPDATES THE SUBJECT ID. first subject id = 1

file_put_contents($id_filename, strval($id)); //CANNOT BE AN INTEGER
header('Location: '.$destination.$id); //ADDS IT TO THE URL

?>