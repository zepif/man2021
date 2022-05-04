<?php 
    $link = mysqli_connect("localhost", "root", "root1", "users");
    $id = $_COOKIE['id'];
    $sql = "SELECT * FROM `todo_list` WHERE `user_id` LIKE '%$id%'";
    $result = mysqli_query($link, $sql);
    $output = '';
    $count = 1;
    $last_id = -1;
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        foreach ($data as $user) {
            //$count = $count + 1;
            //print($user['project_id']);
            //print(' ');
            $idd = $user['project_id'];
            if ($last_id != $idd) {
                $sql = "SELECT * FROM `project` WHERE (`id` LIKE '%$idd%')";
                $result = mysqli_query($link, $sql);
                if ($result == false) {
                    print("Произошла ошибка при выполнении запроса");
                    exit();
                }   
                $task = $result->fetch_assoc();
                //echo $task;
                $output .= '
                                    <tr>
                                        <td>'. $count .'</td>
                                        <td>'. $task['name'] .'</td>
                                        <td>'. $task['fd'].'/'.$task['fm'].'/'.$task['fy'] .'</td>
                                        <td>'. $task['ld'].'/'.$task['lm'].'/'.$task['ly'] .'</td>
                                        <td><span class="badge bg-success">'. $task['statuts'] .'</span></td>
                                    </tr>
                            ';
                $count = $count + 1;
            }
            $last_id = $idd;
        } 
    echo $output;
?>
