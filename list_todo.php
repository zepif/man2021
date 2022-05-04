<?php 
    $link = mysqli_connect("localhost", "root", "root1", "users");
    $id = $_COOKIE['id'];
    $sql = "SELECT * FROM `todo_list` WHERE `user_id` LIKE '%$id%'";
    $result = mysqli_query($link, $sql);
    if (!$result) {
        exit;
    }
    $output = '';
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        foreach ($data as $user) {  
            $output .= '<li>
							<label class="fancy-checkbox">
								<input type="checkbox">
			    				<span class="todo-text">'.$user['task'].'</span>
							</label>
						</li>
                        ';
        }
    echo $output;
?>
