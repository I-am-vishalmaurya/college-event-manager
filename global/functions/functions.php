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

function joinEvent($id){
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    $email = $_SESSION['email'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $sql = "SELECT * FROM joined_events WHERE EVENT_ID = '$id'";
    $result = mysqli_query($link, $sql);
    if ($answer = mysqli_fetch_assoc($result)) {
        if ($answer['EMAIL'] == $email) {
            return '<div class="alert alert-dismissible alert-warning">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <h4 class="alert-heading">Warning!</h4>
            <p class="mb-0">You have already joined this event.<a href="../joiner_index.php">Go back from here.</p>
        </div>';
        } 
    }
    else {
            $sql_to_insert = 'INSERT INTO `joined_events` (`EMAIL`, `FIRST_NAME`, `LAST_NAME`, `EVENT_ID`) VALUES(?,?,?,?)';
            if ($stmt = mysqli_prepare($link, $sql_to_insert)) {
                mysqli_stmt_bind_param($stmt, "sssi", $email, $first_name, $last_name, $id);
            }
            if ($exe = mysqli_stmt_execute($stmt)) {
                return '<div class="alert alert-dismissible alert-success">
                 <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                 <strong>Well done!</strong> You joined the event successfully <a href="../joiner_index.php" class="alert-link">Redirect to previous page</a>.
                 </div>';
            }
        }
    }
?>