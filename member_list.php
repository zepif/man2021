<?php 
    $link = mysqli_connect("localhost", "root", "root1", "users");
    $task = (INT)$_GET['project_id'];
    $sql = "SELECT * FROM `todo_list` WHERE `project_id` LIKE '%$task%'";
    $result = mysqli_query($link, $sql);
    $output = '';
    $last_id = -1;
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        foreach ($data as $user) { 
            $userr = $user['user_id'];
            $sql = "SELECT * FROM `user` WHERE `id` LIKE '%$userr%'";
            $result = mysqli_query($link, $sql);
            $user = $result->fetch_assoc();
            if ($last_id != $user['id']) {
            $output .= '<li>
			            <img src="img/av2.png" class="img-circle" alt="Avatar">
			            <p><a href="profile.php"><strong>'. $user['name'] ." ". $user['surname'] .'</strong></a></p>
			            <span class="text-muted">'. $user['user_type'].'</span>
                       </li>';
            }
            $last_id = $user['id'];
        }
    echo $output;
?>
