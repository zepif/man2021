<?php  
    session_start();
    $link = mysqli_connect("localhost", "root", "root1", "users");

    $sql = "SELECT * FROM `project`";
    $result = mysqli_query($link, $sql);
    $output = "";
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        foreach ($data as $user) { 
            if ($user['statuts'] != 'active') {
            $output .= '<tr>
                          <td class="p-name">
                              <a href="project_details.php?project_id='. $user['id'] .'">' . $user['name'] . '</a>
                              <br>
                              <small>Created   '. $user['fd'] . '-' . $user['fm'] . '-' . $user['fy'] .' </small>
                          </td>

                          <td class="p-progress">
                              <div class="progress progress-xs">
                                  <div style="width: <?php echo '. $user['statuts'] .' ?>;" class="progress-bar progress-bar-dark"></div>
                              </div>
                              <small>'. $user['complete'] .'% Complete </small>
                          </td>
                          <td>
                              <span class="label label-default">Inactive</span>
                          </td>
                          <td>
                              <a href="project_details.php?project_id='. $user['id'] .'" class="btn btn-dark btn-xs"><i class="fa fa-folder"></i> View </a>
                              <a href="#" class="btn btn-dark btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" class="btn btn-dark btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                      </tr>
                      <tr>
                        ';
            } else {
            $output .= ' <tr>
                          <td class="p-name">
                              <a href="project_details.php?project_id='. $user['id'] .'">'. $user['name'] .'</a>
                              <br>
                              <small>Created   '. $user['fd'] . '-' . $user['fm'] . '-' . $user['fy'] .'</small>
                          </td>

                          <td class="p-progress">
                              <div class="progress progress-xs">
                                  <div style="width: 87%;" class="progress-bar progress-bar-dark"></div>
                              </div>
                              <small>'. $user['complete'] . '% Complete </small>
                          </td>
                          <td>
                              <span class="label label-primary">Active</span>
                          </td>
                          <td>
                              <a href="project_details.php?project_id='. $user['id'] .'" class="btn btn-dark btn-xs"><i class="fa fa-folder"></i> View </a>
                              <a href="#" class="btn btn-dark btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                              <a href="#" class="btn btn-dark btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                      </tr>
                    ';
            }
        }
    echo $output;
?>
