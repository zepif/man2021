<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "root1", "users");
    $user_id = $_COOKIE['id'];
    $sql = "SELECT * FROM `user` WHERE `id` LIKE '%$user_id%'";
    $result = mysqli_query($link, $sql);
    $user = $result->fetch_assoc();  
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css"/>
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">
    <title>Профиль</title>
</head>
    <body>
        <?php require "blocks/header.php" ?>  
        <div class="container">
            <div class="row">
    <div class="col-lg-4 col-xl-4">
        <div class="card-box text-center">
            <img src="img/av2.png" class="rounded-circle avatar-xl img-thumbnail" alt="profile-image">

            <h4 class="mb-0"> <?php echo $user['name'],' ',$user['surname']; ?> </h4>
            <!--<p class="text-muted">@webdesigner</p> -->

            <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
            <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">UP STATUS</button>

            <div class="text-left mt-3">
                <h4 class="font-13 text-uppercase">About Me :</h4>
                <p class="text-muted font-13 mb-3">
                    <?php echo $user['bio'];?>
                </p>
                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"> <?php echo $user['name'],' ',$user['surname']; ?></span></p>

                <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2"><?php echo $user['mobile']; ?></span></p>

                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 "><?php echo $user['email']; ?></span></p>

                <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2"><?php echo $user['location']; ?></span></p>    
            </div>

            <ul class="social-list list-inline mt-3 mb-0">
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i class="fab fa-telegram"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="fab fa-github"></i></a>
                </li>
            </ul>
        </div> <!-- end card-box -->

        <div class="card-box">
            <h4 class="header-title">Навыки</h4>

            <div class="pt-1">
                <h6 class="text-uppercase mt-0">HTML5 <span class="float-right">90%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                        <span class="sr-only">90% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">PHP <span class="float-right">67%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                        <span class="sr-only">67% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">WordPress <span class="float-right">48%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%">
                        <span class="sr-only">48% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">Laravel <span class="float-right">95%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                        <span class="sr-only">95% Complete</span>
                    </div>
                </div>
            </div>

            <div class="mt-2 pt-1">
                <h6 class="text-uppercase">ReactJs <span class="float-right">72%</span></h6>
                <div class="progress progress-sm m-0">
                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                    </div>
                </div>
            </div>

        </div> <!-- end card-box-->

    </div> <!-- end col-->

    <div class="col-lg-8 col-xl-8">
        <div class="card-box">
            <ul class="nav nav-pills navtab-bg">
                <li class="nav-item">
                    <a href="#about-me" data-toggle="tab" aria-expanded="true" class="nav-link ml-0 active">
                        <i class="mdi mdi-face-profile mr-1"></i>About Me
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                 <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading">My GitHub</h2>
                        <div id="github-graph" class="github-graph">

                        </div><!--//github-graph-->

                        <!--//Usage: http://caseyscarborough.com/projects/github-activity/ -->                       
                        <div id="ghfeed" class="ghfeed">
                        </div><!--//ghfeed-->
                        
                    </div><!--//secton-inner-->
                </section><!--//section-->

                <div class="tab-pane show active" id="about-me">
                    
                   <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i>
                        Projects</h5>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require "print_tasks.php"?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- end timeline content-->

                <div class="tab-pane" id="settings">
                    <form>
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" id="firstname" placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name">
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="userbio">Bio</label>
                                    <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..."></textarea>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="useremail">Email Address</label>
                                    <input type="email" class="form-control" id="useremail" placeholder="Enter email">
                                    <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" placeholder="Enter phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="Enter place">
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        
                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="companyname">Company Name</label>
                                    <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cwebsite">Website</label>
                                    <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social-fb">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social-tw">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social-insta">Instagram</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social-lin">Linkedin</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social-sky">Skype</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="social-gh">Github</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fab fa-github"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                        <div class="text-right">
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                        </div>
                    </form>
                </div>
                <!-- end settings content-->

            </div> <!-- end tab-content -->
        </div> <!-- end card-box-->

    </div> <!-- end col -->
</div>
</div>
        <?php require "blocks/footer.php" ?> 
            <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            

    </body>
</html>
