<?php

function turnacteString($str, $chars, $to_space, $to_replacement = "...")
{
    if ($chars > strlen($str)) return $str;
    $str = substr($str, 0, $chars);
    $space_pos = strrpos($str, " ");
    if ($to_space && $space_pos >= 0)
        $str = substr($str, 0, strrpos($str, " "));

    return ($str . $to_replacement);
}

function numberOfJoiners($id){
    /* Attempt to connect to database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $sql = "SELECT * FROM `joined_events` WHERE EVENT_ID = '$id'";
    $result = mysqli_query($link, $sql);
    $numsOFJoins = mysqli_num_rows($result);
    return $numsOFJoins;

}


?>