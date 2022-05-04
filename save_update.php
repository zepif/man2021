<?php
    $id = $_COOKIE['id'];
    $link = mysqli_connect("localhost", "root", "root1", "users");

    if(isset($_FILES['image'])){
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
     
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);
    
        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true){
            $types = ["image/jpeg", "image/jpg", "image/png"];
            if(in_array($img_type, $types) === true){
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                    $insert_query = mysqli_query($conn, "UPDATE `user` SET `img` = '$new_img_name' WHERE 'id' LIKE `$id`");
                }
            }
        }
    }

    $fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
    $lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
    $mobile = filter_var(trim($_POST['mobile']), FILTER_SANITIZE_STRING);
    $place = filter_var(trim($_POST['place']), FILTER_SANITIZE_STRING);
    $bio = filter_var(trim($_POST['userbio']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['useremail']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['userpassword']), FILTER_SANITIZE_STRING);
    $facebook = filter_var(trim($_POST['social-fb']), FILTER_SANITIZE_STRING);
    $twitter = filter_var(trim($_POST['social-tw']), FILTER_SANITIZE_STRING);
    $instagram = filter_var(trim($_POST['social-insta']), FILTER_SANITIZE_STRING);
    $linkedin = filter_var(trim($_POST['social-lin']), FILTER_SANITIZE_STRING);
    $discord = filter_var(trim($_POST['social-sky']), FILTER_SANITIZE_STRING);
    $github = filter_var(trim($_POST['social-gh']), FILTER_SANITIZE_STRING);
    
    if (mb_strlen($fname) != 0) {
        $sql = "UPDATE `user` SET `name` = '$fname' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($lname) != 0) {
        $sql = "UPDATE `user` SET `surname` = '$lname' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($mobile) != 0) {
        //print($mobile);
        $sql = "UPDATE `user` SET `mobile` = '$mobile' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($place) != 0) {
        $sql = "UPDATE `user` SET `location` = '$place' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }

    if (mb_strlen($bio) != 0) {
        print($bio);
        $sql = "UPDATE `user` SET `bio` = '$bio' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
        if ($result == false) {
            print('error');
        }
    }
    if (mb_strlen($email) != 0) {
        $sql = "UPDATE `user` SET `email` = '$email' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($pass) != 0) {
        $pass = md5($pass);
        $sql = "UPDATE `user` SET `password` = '$pass' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($facebook) != 0) {
        $sql = "UPDATE `user` SET `facebook` = '$facebook' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($twitter) != 0) {
        $sql = "UPDATE `user` SET `twitter` = '$twitter' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($instagram) != 0) {
        $sql = "UPDATE `user` SET `instagram` = '$instagram' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($linkedin) != 0) {
        $sql = "UPDATE `user` SET `linkedin` = '$linkedin' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($discord) != 0) {
        $sql = "UPDATE `user` SET `discord` = '$discord' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    if (mb_strlen($github) != 0) {
        $sql = "UPDATE `user` SET `github` = '$github' WHERE `id` LIKE '$id'";
        $result = mysqli_query($link, $sql);
    }
    header('Location: settings.php');
?>
