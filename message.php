<?php 
    session_start();
    $link = mysqli_connect("localhost", "root", "root1", "users");

    $your_id = $_COOKIE['id'];
    $friend_id = (INT)$_POST['incoming_id'];
    $sql = "SELECT * FROM `messages` WHERE (`from_id` LIKE '%$your_id%' AND `to_id` LIKE '%$friend_id%') OR (`from_id` LIKE '%$friend_id%' AND `to_id` LIKE '%$your_id%')";
    $result = mysqli_query($link, $sql);
    if (!$result)
        echo 'error';
    $output = "";
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        foreach ($data as $user) { 
            if ($user['from_id'] != $your_id) {
            $output .= '<div class="chat incoming">
                <img src="img/av2.png" alt="">
                <div class="details">
                    <p>'. $user['message'] .'</p>
                    </div>
                </div>';
            } else {
            $output .= '<div class="chat outgoing">
                <div class="details">
                     <p>'. $user['message'] .'</p>
                </div>
            </div>';
            }
        }
    echo $output;
?>
