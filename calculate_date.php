<?php 
    $link = mysqli_connect("localhost", "root", "root1", "users");
    $task_id = $_GET['project_id'];
    $sql = "SELECT * FROM `project` WHERE `id` LIKE '%$task_id%'";
    $result = mysqli_query($link, $sql);
    $task = $result->fetch_assoc();  
 
    $d1 .= $task['fy'];
    $d1 .= '-';
    $d1 .= $task['fm'];
    $d1 .= '-';
    $d1 .= $task['fd'];

    $d2 .= $task['ly'];
    $d2 .= '-';
    $d2 .= $task['lm'];
    $d2 .= '-';
    $d2 .= $task['ld'];
    
    $d1_ts = strtotime($d1);
    $d2_ts = strtotime($d2);

    $seconds = abs($d1_ts - $d2_ts);

    echo floor($seconds / 86400);
?>
