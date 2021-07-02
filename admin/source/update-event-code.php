<?php
session_start();


require '../db/dbconfig.php';
$event_name = $sub_event_name = $college_name = $place = $time = $head_name = $description = '';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['event_id'];
    echo $id;
}