<?php 
    $link = mysqli_connect("localhost", "root", "root1", "users");
    if ($link == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
        exit();
    } else {
       // print("успех!\n");
    }
    $cook = $_COOKIE['id'];
    $sql = "SELECT * FROM `friend` WHERE `from_id` LIKE '%$cook%'";
    //print($_COOKIE['id']);
    $result = mysqli_query($link, $sql);
    //echo $sql;
    if ($result == false) {
        print("Произошла ошибка при выполнении запроса1");
        exit();
    } else {
        //print("успех!\n");
    }
    //print($result);
    //$col = $result->fetch_assoc();
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    foreach ($data as $user) {
        $friend_id = $user['friend_id'];
        //print($friend_id);
        $sql2 =  "SELECT * FROM `user` WHERE `id` LIKE '%$friend_id%'";
        $result2 = mysqli_query($link, $sql2); 
        if ($result2 == false) {
            print("Произошла ошибка при выполнении запроса2");
            exit();
        } else {
            //print("успех!\n");
        }
        $user2 = $result2->fetch_assoc();
        //echo $user;
        $output .=  '<a href="chat_area.php?user_id='. $user2['id'] .'">
                        <div class="content">
                            <img src="img/av2.png" alt="">
                            <div class="details">
                                <span>'. $user2['name']. " ". $user2['surname']  .'</span>
                                <p>This is test message</p>
                            </div>
                        </div>
                        <div class="status-dot">
                           <i class="fas fa-circle"></i><br/>
                        </div>
                    </a>'; 
    }
    echo $output;
?>
