<?php 
    session_start();
    if (isset($_COOKIE['id'])) {
        $link = mysqli_connect("localhost", "root", "root1", "users");
        $outgoing_id = mysqli_real_escape_string($link, $_POST['outgoing_id']);
        $incoming_id =  mysqli_real_escape_string($link, $_POST['incoming_id']);
        $message =  mysqli_real_escape_string($link, $_POST['message']);

        if (!empty($message)) { 
            $sql = "INSERT INTO `messages`(`from_id`, `to_id`, `message`) VALUES('$outgoing_id', '$incoming_id', '$message')";
            $result = mysqli_query($link, $sql) or die();
            if ($result == false) {
                print("error");
            }
        }
    } else {
        header("validation-form/auth.php");
    }
?>
