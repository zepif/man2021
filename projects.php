<?php
    if(!$_COOKIE['user']){
        header("location: login.php");
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Document</title>
</head>
    <body>
        <?php require "blocks/header.php" ?>
        <div class="container">
            <section class="panel">
                  <header class="panel-heading container">
                      All projects List
                      <span class="pull-right">
                          <a href="/" class="btn btn-dark"> Create New Project</a>
                      </span>
                  </header>
                  <div class="panel-body">
                      <div class="row">

                          <div class="col-md-12 container">
                              <div class="input-group"><input type="text" placeholder="Search Here" class="input-sm form-control"> <span class="input-group-btn">
                              <button type="button" class="btn btn-dark fas fa-search"> </button> </span></div>
                          </div>
                      </div>
                  </div>
                  <table class="table table-hover p-table">
                      <thead>
                      <tr>
                          <th>Project Name</th>
                          <th>Project Progress</th>
                          <th>Project Status</th>
                          <th>Custom</th>
                      </tr>
                      </thead>
                      <tbody>
                          <?php require "show_projects.php" ?>
                      </tbody>
                  </table>
              </section>
        </div>
        <?php require "blocks/footer.php" ?>
    </body>
</html>
